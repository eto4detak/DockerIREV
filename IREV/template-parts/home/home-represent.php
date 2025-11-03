<?php
/**
 * Template Part: Home Represent
 */
?>

<section class="home_represent">
    <div class="home_represent_upperWrapper">
        <div class="home_represent_counter">
            <span class="home_represent_counter_timer">00:03,00</span>
            <img
                    class="home_represent_counter_red"
                    src="<?php echo esc_url(get_theme_file_uri('src/icons/dot.svg')); ?>"
            />
            <img
                    class="home_represent_counter_yellow"
                    src="<?php echo esc_url(get_theme_file_uri('src/icons/yellowDot.svg')); ?>"
            />
            <img
                    class="home_represent_counter_green"
                    src="<?php echo esc_url(get_theme_file_uri('src/icons/greenDot.svg')); ?>"
            />
            <?php if( get_field('home_represent_counter_go') ): ?>
                <span class="home_represent_counter_go">
                    <?php the_field('home_represent_counter_go'); ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="home_represent_general">
            <?php if( get_field('home_represent_general_slogan') ): ?>
                <h1 class="home_represent_general_slogan">
                    <?php the_field('home_represent_general_slogan'); ?>
                </h1>
            <?php endif; ?>
            <div class="home_represent_form_container">
                <form class="home_represent_form">
                    <input
                            type="email"
                            placeholder="Enter e-mail"
                            class="home_represent_form_container_input"
                    />
                    <button
                            class="home_represent_form_container_button"
                            type="submit">
                        test-drive
                    </button>
                </form>
                <?php if( get_field('home_represent_form_after') ): ?>
                    <span><?php the_field('home_represent_form_after'); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="home_represent_rate">
            <div class="home_represent_rate_avatars">
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar1.svg')); ?>"
                />
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar2.svg')); ?>"
                />
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar3.svg')); ?>"
                />
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar4.svg')); ?>"
                />
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar5.svg')); ?>"
                />
                <img
                        src="<?php echo esc_url(get_theme_file_uri('src/icons/avatar6.svg')); ?>"
                />
            </div>
        <img
                class="home_represent_rate_rating"
                src="<?php echo esc_url(get_theme_file_uri('src/icons/stars.svg')); ?>"
        />
        <?php if( get_field('home_represent_rate_rating_span') ): ?>
            <span><?php the_field('home_represent_rate_rating_span'); ?></span>
        <?php endif; ?>
    </div>
    <div class="home_represent_lowerWrapper">
        <?php if( get_field('home_represent_lowerwrapper_text') ): ?>
            <span class="home_represent_lowerWrapper_text">
                <?php the_field('home_represent_lowerwrapper_text'); ?>
            </span>
        <?php endif; ?>
        <div class="home_represent_lowerWrapper_video">
            <div class="video_cont">
                <video width="100%">
                    <source src="<?php echo esc_url(get_theme_file_uri('src/video/sample-15s.mp4')); ?>" type="video/mp4">
                </video>
                <img src="<?php echo esc_url(get_theme_file_uri('src/icons/playbutton.svg')); ?>" alt="play" />
            </div>
            <div class="video_player">
                <span>00:30</span>
                <button><img src="<?php echo esc_url(get_theme_file_uri('src/icons/play.svg')); ?>" /></button>
            </div>
        </div>
    </div>
    <?php $image = get_field('home_represent_backgroundimg'); ?>
    <img
            class="home_represent_backgroundImg"
            src="<?php echo esc_url($image['url']); ?>"
            alt="backgroundimage"
    />
</section>
