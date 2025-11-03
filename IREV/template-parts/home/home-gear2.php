<?php
/**
 * Template Part: Home Gear2
 */
?>

<section class="home_gear2">
    <header class="home_gear_header">
        <?php if( get_field('home_gear2_title') ): ?>
            <span><?php the_field('home_gear2_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear2_img'); ?>
        <img
                src="<?php echo esc_url($image['url']); ?>"
        />
    </header>
    <div class="home_gear2_upper_container">
        <?php if( get_field('home_gear2_upper_container') ): ?>
            <h2><?php the_field('home_gear2_upper_container'); ?></h2>
        <?php endif; ?>
        <div class="home_gear2_upper_back">
            <div class="home_gear2_upper_credits">
                <div class="credits_scroll">
                    <div class="credits_track">
                        <div class="credits_group">
                        <?php if( get_field('credits_group') ): ?>
                            <?php the_field('credits_group'); ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $image = get_field('home_gear2_upper_back_img'); ?>
            <img
                    src="<?php echo esc_url($image['url']); ?>"
            />
        </div>
    </div>
        <div class="home_gear2_lower_container">
            <div class="home_gear2_lower_container_nitro">
                <div class="nitro-effect">
                    <?php $image = get_field('home_gear2_lower_container_nitro'); ?>
                    <img
                            src="<?php echo esc_url($image['url']); ?>"
                    />
                </div>
                <?php if( get_field('home_gear2_lower_container_rev') ): ?>
                    <span class="home_gear2_lower_container_rev"><?php the_field('home_gear2_lower_container_rev'); ?></span>
                <?php endif; ?>
            </div>
            <div class="home_gear2_lower_container_lower_wrapper">
                <?php if( get_field('home_gear2_lower_container_lower_wrapper_span') ): ?>
                    <span><?php the_field('home_gear2_lower_container_lower_wrapper_span'); ?></span>
                <?php endif; ?>
                <?php if( get_field('home_gear2_lower_container_lower_wrapper_button') ): ?>
                    <button><?php the_field('home_gear2_lower_container_lower_wrapper_button'); ?></button>
                <?php endif; ?>
            </div>
        </div>
</section>