<?php
/**
 * Template Part: Home Gear3
 */
?>

<section class="home_gear3">
    <header class="home_gear_header">
        <?php if( get_field('home_gear3_title') ): ?>
            <span><?php the_field('home_gear3_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear3_img'); ?>
        <img
            src="<?php echo esc_url($image['url']); ?>"
        />
    </header>
    <div class="home_gear3_container">
        <?php if( get_field('home_gear3_container') ): ?>
            <h2><?php the_field('home_gear3_container'); ?></h2>
        <?php endif; ?>
        <?php $image = get_field('home_gear3_background'); ?>
        <img class="home_gear3_background" src="<?php echo esc_url($image['url']); ?>"/>
        <div class="home_gear3_clients">
            <div class="home_gear3_clients_avatar">

                <?php
                if( have_rows('client_1') ):
                    while( have_rows('client_1') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item">
                            <button data-trigger="client1">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_2') ):
                    while( have_rows('client_2') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item">
                            <button data-trigger="client2">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_3') ):
                    while( have_rows('client_3') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item">
                            <button data-trigger="client3">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_6') ):
                    while( have_rows('client_6') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item selected">
                            <button data-trigger="client6">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_7') ):
                    while( have_rows('client_7') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item">
                            <button data-trigger="client7">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;
                               
                if( have_rows('client_8') ):
                    while( have_rows('client_8') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        ?>
                        <div class="avatar-item">
                            <button data-trigger="client8">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                            </button>
                            <div class="tooltip"><?php echo $name; ?></div>
                        </div>
                        <?php
                    endwhile;
                endif;

                ?>
            </div>
        </div>

            <div class="home_gear3_reviews">
            <?php 
                if( have_rows('client_1') ):
                    while( have_rows('client_1') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review" data-client="client1">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_2') ):
                    while( have_rows('client_2') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review" data-client="client2">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_3') ):
                    while( have_rows('client_3') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review" data-client="client3">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_6') ):
                    while( have_rows('client_6') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review selected" data-client="client6">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_7') ):
                    while( have_rows('client_7') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review" data-client="client7">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('client_8') ):
                    while( have_rows('client_8') ) : the_row();
                        $name = get_sub_field('name');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        $additional = get_sub_field('additional');
                        ?>
                        <div class="home_gear3_reviews_review" data-client="client8">
                            <span><?php echo $text; ?></span>
                            <div class="client">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div class="client_info">
                                    <span class="client_name"><?php echo $name; ?></span>
                                    <span class="client_additional"><?php echo $additional; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
            ?>
            </div>
    </div>

    <div class="home_gear3_lower_container">
        <?php if( get_field('home_gear3_lower_container_h2') ): ?>
            <h2><?php the_field('home_gear3_lower_container_h2'); ?></h2>
        <?php endif; ?>
        <?php $image = get_field('home_gear3_lower_container_img'); ?>
        <img class="back" src="<?php echo esc_url($image['url']); ?>"/>
        <div class="dashed_vertical"></div>
        <div class="dashed_horizontal"></div>
        <div class="lower_wrapper">
            <div class="home_gear3_lower_left">
                <div class="dashed_vertical"></div>
                <div class="label">
                    <?php $image = get_field('home_gear3_lower_left_img'); ?>
                    <img src="<?php echo esc_url($image['url']); ?>"/>
                    <?php if( get_field('home_gear3_lower_left_title') ): ?>
                        <div><?php the_field('home_gear3_lower_left_title'); ?></div>
                    <?php endif; ?>
                </div>
                    <?php if( get_field('home_gear3_lower_left_text') ): ?>
                        <span><?php the_field('home_gear3_lower_left_text'); ?></span>
                    <?php endif; ?>
                <div class="cases_wraper">

                <?php 
                if( have_rows('cases_wraper_1') ):
                    while( have_rows('cases_wraper_1') ) : the_row();
                        $title = get_sub_field('title');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        ?>
                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <span><?php echo $title; ?></span>
                            </div>
                            <span>
                            <?php echo $text; ?>
                            </span>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('cases_wraper_2') ):
                    while( have_rows('cases_wraper_2') ) : the_row();
                        $title = get_sub_field('title');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        ?>
                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <span><?php echo $title; ?></span>
                            </div>
                            <span>
                            <?php echo $text; ?>
                            </span>
                        </div>
                        <?php
                    endwhile;
                endif;

                if( have_rows('cases_wraper_3') ):
                    while( have_rows('cases_wraper_3') ) : the_row();
                        $title = get_sub_field('title');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        ?>
                        <div class="case">
                            <div class="dashed_vertical"></div>
                            <div class="case_label">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <span><?php echo $title; ?></span>
                            </div>
                            <span>
                            <?php echo $text; ?>
                            </span>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

                </div>
                    <?php if( get_field('cases_wraper_button') ): ?>
                        <button><?php the_field('cases_wraper_button'); ?></button>
                    <?php endif; ?>
            </div>

            <?php 
                if( have_rows('home_gear3_lower_right') ):
                    while( have_rows('home_gear3_lower_right') ) : the_row();
                        $title = get_sub_field('title');
                        $img = get_sub_field('img');
                        $text = get_sub_field('text');
                        ?>
                        <div class="home_gear3_lower_right">
                            <div class="dashed_vertical"></div>
                            <div class="label">
                                <img src="<?php echo esc_url($img['url']); ?>"/>
                                <div><?php echo $title; ?></div>
                            </div>
                            <span><?php echo $text; ?></span>
                        </div>
                        <?php
                    endwhile;
                endif;
            ?>



        </div>
        
        <div class="right_bottom">
            <div class="right_cases_wrapper">
                <?php 
                    if( have_rows('right_cases_wrapper_1') ):
                        while( have_rows('right_cases_wrapper_1') ) : the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <div class="case">
                                <div class="dashed_vertical"></div>
                                <div class="case_label">
                                    <span><?php echo $title; ?></span>
                                </div>
                                <span>
                                    <?php echo $text; ?>
                                </span>
                            </div>
                            <?php
                        endwhile;
                    endif;

                    if( have_rows('right_cases_wrapper_2') ):
                        while( have_rows('right_cases_wrapper_2') ) : the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <div class="case">
                                <div class="dashed_vertical"></div>
                                <div class="case_label">
                                    <span><?php echo $title; ?></span>
                                </div>
                                <span>
                                    <?php echo $text; ?>
                                </span>
                            </div>
                            <?php
                        endwhile;
                    endif;

                    if( have_rows('right_cases_wrapper_3') ):
                        while( have_rows('right_cases_wrapper_3') ) : the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <div class="case">
                                <div class="dashed_vertical"></div>
                                <div class="case_label">
                                    <span><?php echo $title; ?></span>
                                </div>
                                <span>
                                    <?php echo $text; ?>
                                </span>
                            </div>
                            <?php
                        endwhile;
                    endif;
                ?>

            </div>
                <?php if( get_field('right_cases_wrapper_button') ): ?>
                    <button><?php the_field('right_cases_wrapper_button'); ?></button>
                <?php endif; ?>
        </div>

    </div>
</section>