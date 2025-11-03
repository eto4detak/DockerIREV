<?php
/**
 * Template Part: Home Gear4
 */
?>

<section class="home_gear4">
    <header class="home_gear_header">
        <?php if( get_field('home_gear4_title') ): ?>
            <span><?php the_field('home_gear4_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear4_img'); ?>
        <img
            src="<?php echo esc_url($image['url']); ?>"
        />
    </header>

    <div class="home_gear4_container">
        <?php 
            if( have_rows('home_gear4_container') ):
                while( have_rows('home_gear4_container') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $img = get_sub_field('img');
                    $img2 = get_sub_field('img2');
                    ?>
                    <img
                            class="star1"
                            src="<?php echo esc_url($img['url']); ?>"
                    />
                    <img
                            class="star2"
                            src="<?php echo esc_url($img['url']); ?>"
                    />
                    <img
                            class="star3"
                            src="<?php echo esc_url($img['url']); ?>"
                    />
                    <img
                            class="star4"
                            src="<?php echo esc_url($img['url']); ?>"
                    />
                    <img
                            src="<?php echo esc_url($img2['url']); ?>"
                    />
                    <div class="text_wrapper">
                        <span class="text_main"><?php echo $title; ?></span>
                        <span class="text_additional"><?php echo $text; ?></span>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>        

    </div>

    <div class="home_gear4_lower_container">
        <?php if( get_field('home_gear4_lower_container') ): ?>
            <h2><?php the_field('home_gear4_lower_container'); ?></h2>
        <?php endif; ?>
        <div class="home_gear4_lower_label_wrapper">
            <div class="label">
                <?php if( get_field('home_gear4_lower_label_wrapper_text_1') ): ?>
                    <div class="label_upper"><?php the_field('home_gear4_lower_label_wrapper_text_1'); ?></div>
                <?php endif; ?>
                <div class="border">
                    <div class="border_vertical">
                        <div class="upper_circle circle1"></div>
                        <div class="lower_circle circle2"></div>
                    </div>
                    <div class="border_horizontal"></div>
                </div>
                <?php if( get_field('home_gear4_lower_label_wrapper_text_2') ): ?>
                    <div class="label_lower"><?php the_field('home_gear4_lower_label_wrapper_text_2'); ?></div>
                <?php endif; ?>
            </div>
            <div class="border_link"></div>
            <div class="label">
                <?php if( get_field('home_gear4_lower_label_wrapper_text_3') ): ?>
                    <div class="label_upper"><?php the_field('home_gear4_lower_label_wrapper_text_3'); ?></div>
                <?php endif; ?>
                <div class="border">
                    <div class="border_horizontal"></div>
                    <div class="border_vertical second">
                        <div class="upper_circle circle3"></div>
                        <div class="lower_circle circle4"></div>
                    </div>
                    <div class="border_horizontal"></div>
                </div>
                <?php if( get_field('home_gear4_lower_label_wrapper_text_4') ): ?>
                    <div class="label_lower"><?php the_field('home_gear4_lower_label_wrapper_text_4'); ?></div>
                <?php endif; ?>
            </div>
            <div class="border_link"></div>
            <div class="label third">
                <?php if( get_field('home_gear4_lower_label_wrapper_text_5') ): ?>
                    <div class="label_upper"><?php the_field('home_gear4_lower_label_wrapper_text_5'); ?></div>
                <?php endif; ?>
                <div class="border">
                    <div class="border_horizontal"></div>
                    <div class="border_vertical second">
                        <div class="upper_circle circle5"></div>
                    </div>
                </div>
                <div class="label_lower last">
                    <?php $image = get_field('home_gear4_lower_label_wrapper_img'); ?>
                    <img
                            src="<?php echo esc_url($image['url']); ?>"
                    />
                </div>
            </div>
        </div>
        <?php $image = get_field('gear4back'); ?>
        <img
                class="gear4back"
                src="<?php echo esc_url($image['url']); ?>"
        />
    </div>
</section>