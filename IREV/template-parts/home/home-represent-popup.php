<?php
/**
 * Template Part: Home Represent Popup
 */
?>

<div class="home_popup_overlay">
    <div class="home_popup_content">
            <div class="home_popup_content_upper">
                <div class="home_popup_content_label">
                    <div class="home_popup_content_label_wrapper">
                        <?php if( get_field('home_popup_content_label_wrapper') ): ?>
                            <span><?php the_field('home_popup_content_label_wrapper'); ?></span>
                        <?php endif; ?>
                        <span
                                class="home_popup_content_label_wrapper_counter">
                        <?php if( get_field('home_popup_content_label_wrapper_counter') ): ?>
                            <?php the_field('home_popup_content_label_wrapper_counter'); ?>
                        <?php endif; ?>
                    </span>
                    </div>     
                    <?php if( get_field('home_popup_content_label_discount') ): ?>
                        <span><?php the_field('home_popup_content_label_discount'); ?></span>
                    <?php endif; ?>
                </div>
                <button><img src="<?php echo esc_url(get_theme_file_uri('src/icons/cancel.svg')); ?>" alt="cancel"/></button>
            </div>
            
        <?php if( get_field('home_popup_content_title') ): ?>
            <h2><?php the_field('home_popup_content_title'); ?></h2>
        <?php endif; ?>
        <div class="home_popup_content_lower">

            <?php echo do_shortcode( '[contact-form-7 id="1b6adf2" title="popup2"]' );  ?>
            
            <div class="home_popup_content_lower_rightcont">
                <div class="home_popup_content_lower_rightcont_video">
                    <video width="100%" id="popupVideo">
                        <source src="<?php echo esc_url(get_theme_file_uri('src/video/sample-15s.mp4')); ?>" type="video/mp4">
                    </video>
                        <img src="<?php echo esc_url(get_theme_file_uri('src/icons/playbutton.svg')); ?>" alt="play" />
                </div>
                <?php if( get_field('home_popup_content_lower_rightcont_title') ): ?>
                    <span><?php the_field('home_popup_content_lower_rightcont_title'); ?></span>
                <?php endif; ?>
                <div class="home_popup_content_lower_rightcont_lower">
                    <div class="home_popup_content_lower_rightcont_lower_phrase">
                        <?php if( get_field('home_popup_content_lower_rightcont_lower_phrase') ): ?>
                            <span><?php the_field('home_popup_content_lower_rightcont_lower_phrase'); ?></span>
                        <?php endif; ?>
                        <?php $image = get_field('home_popup_content_lower_rightcont_lower_phrase_img'); ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <div class="home_popup_content_lower_rightcont_lower_award">
                        <?php $image = get_field('home_popup_content_lower_rightcont_lower_award'); ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php if( get_field('home_popup_content_lower_rightcont_lower_award_title') ): ?>
                            <span class="home_popup_content_lower_rightcont_lower_award_title"><?php the_field('home_popup_content_lower_rightcont_lower_award_title'); ?></span>
                        <?php endif; ?>
                        <?php if( get_field('home_popup_content_lower_rightcont_lower_award_text') ): ?>
                            <span class="home_popup_content_lower_rightcont_lower_award_text"><?php the_field('home_popup_content_lower_rightcont_lower_award_text'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-overlay" id="modalOverlay">
    <div class="modal">
        <div class="modal-video">
            <video width="100%">
                <source src="<?php echo esc_url(get_theme_file_uri('src/video/sample-15s.mp4')); ?>" type="video/mp4">
            </video>
            <img src="<?php echo esc_url(get_theme_file_uri('src/icons/playbutton.svg')); ?>" alt="play" />
        </div>
        <form class="modal-form">
            <input type="email" class="form-input" placeholder="Enter e-mail">
            <button class="form-button">TALK TO SALES</button>
        </form>
    </div>
</div>

