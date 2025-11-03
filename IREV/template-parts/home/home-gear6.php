<?php
/**
 * Template Part: Home Gear6
 */
?>

<section class="home_gear6">
    <header class="home_gear_header">
        <?php if( get_field('home_gear6_title') ): ?>
            <span><?php the_field('home_gear6_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear6_img'); ?>
        <img
            src="<?php echo esc_url($image['url']); ?>"
        />
    </header>

    <?php 
        if( have_rows('home_gear6_container') ):
            while( have_rows('home_gear6_container') ) : the_row();
                $title = get_sub_field('title');
                $btn_title = get_sub_field('btn_title');
                $img = get_sub_field('img');
                ?>
                <div class="home_gear6_container">
                    <h2><?php echo $title; ?></h2>
                    <button class="open_modal"><?php echo $btn_title; ?></button>
                    <img
                            src="<?php echo esc_url($img['url']); ?>"
                    />
                </div>
                <?php
            endwhile;
        endif;
    ?>
</section>