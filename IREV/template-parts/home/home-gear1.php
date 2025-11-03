<?php
/**
 * Template Part: Home Gear1
 */
?>

<section class="home_gear1">
    <header class="home_gear_header">
        <?php if( get_field('home_gear1_title') ): ?>
            <span><?php the_field('home_gear1_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear1_img'); ?>
        <img src="<?php echo esc_url($image['url']); ?>" />
    </header>
    <div class="home_gear1_wrapper">

    <?php
        if( have_rows('home_gear1_info_container_1') ):
            ?> <div class="home_gear1_info_container" data-section="1"> <?php
            while( have_rows('home_gear1_info_container_1') ) : the_row();
                $title = get_sub_field('title');
                $name = get_sub_field('name');
                $text = get_sub_field('text');
            ?>
                <span class="home_gear1_info_label"><?php echo $title; ?></span> 
                <div class="home_gear1_info_text_container">
                    <h2><?php echo $name; ?></h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo $text; ?>
                    </span>
                </div>
            <?php

            endwhile;
            ?> </div> <?php
        endif; 
    ?>
    <?php
        if( have_rows('home_gear2_info_container_2') ):
            ?> <div class="home_gear1_info_container" data-section="2"> <?php
            while( have_rows('home_gear2_info_container_2') ) : the_row();
                $title = get_sub_field('title');
                $name = get_sub_field('name');
                $text = get_sub_field('text');
            ?>
                <span class="home_gear1_info_label"><?php echo $title; ?></span> 
                <div class="home_gear1_info_text_container">
                    <h2><?php echo $name; ?></h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo $text; ?>
                    </span>
                </div>
            <?php

            endwhile;
            ?> </div> <?php
        endif; 
    ?>
    <?php
        if( have_rows('home_gear3_info_container_3') ):
            ?> <div class="home_gear1_info_container" data-section="3"> <?php
            while( have_rows('home_gear3_info_container_3') ) : the_row();
                $title = get_sub_field('title');
                $name = get_sub_field('name');
                $text = get_sub_field('text');
            ?>
                <span class="home_gear1_info_label"><?php echo $title; ?></span> 
                <div class="home_gear1_info_text_container">
                    <h2><?php echo $name; ?></h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo $text; ?>
                    </span>
                </div>
            <?php

            endwhile;
            ?> </div> <?php
        endif; 
    ?>
    <?php
        if( have_rows('home_gear4_info_container_4') ):
            ?> <div class="home_gear1_info_container" data-section="4"> <?php
            while( have_rows('home_gear4_info_container_4') ) : the_row();
                $title = get_sub_field('title');
                $name = get_sub_field('name');
                $text = get_sub_field('text');
            ?>
                <span class="home_gear1_info_label"><?php echo $title; ?></span> 
                <div class="home_gear1_info_text_container">
                    <h2><?php echo $name; ?></h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo $text; ?>
                    </span>
                </div>
            <?php

            endwhile;
            ?> </div> <?php
        endif; 
    ?>
    <?php
        if( have_rows('home_gear5_info_container_5') ):
            ?> <div class="home_gear1_info_container" data-section="5"> <?php
            while( have_rows('home_gear5_info_container_5') ) : the_row();
                $title = get_sub_field('title');
                $name = get_sub_field('name');
                $text = get_sub_field('text');
            ?>
                <span class="home_gear1_info_label"><?php echo $title; ?></span> 
                <div class="home_gear1_info_text_container">
                    <h2><?php echo $name; ?></h2>
                    <span class="home_gear1_info_text_container_text">
                        <?php echo $text; ?>
                    </span>
                </div>
            <?php

            endwhile;
            ?> </div> <?php
        endif; 
    ?>

    </div>
</section>