<?php
/**
 * Template Part: Home Gear5
 */
?>

<section class="home_gear5">
    <header class="home_gear_header">
        <?php if( get_field('home_gear5_title') ): ?>
            <span><?php the_field('home_gear5_title'); ?></span>
        <?php endif; ?>
        <?php $image = get_field('home_gear5_img'); ?>
        <img
            src="<?php echo esc_url($image['url']); ?>"
        />
    </header>
    <div class="home_gear5_container">
        <?php if( get_field('home_gear5_container') ): ?>
            <h2><?php the_field('home_gear5_container'); ?></h2>
        <?php endif; ?>
        <div class="home_gear5_cards_container">

        <?php 
            if( have_rows('cards_card_0') ):
                while( have_rows('cards_card_0') ) : the_row();
                    $title = get_sub_field('title');
                    $img = get_sub_field('img');
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    $label = get_sub_field('label');
                    $btn_text = get_sub_field('btn_text');

                    ?>
                    <div class="cards_card" data-card-index="0">
                        <img src="<?php echo esc_url($img['url']); ?>" />
                        <div class="card_label">
                            <div class="card_label_wrapper">
                                <img src="<?php echo esc_url($icon['url']); ?>" />
                                <div><?php echo $title; ?></div>
                            </div>
                            <span><?php echo $label; ?></span>
                        </div>
                        <ul>
                            <?php echo $text; ?>
                        </ul>
                        <button><?php echo $btn_text; ?></button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('cards_card_1') ):
                while( have_rows('cards_card_1') ) : the_row();
                    $title = get_sub_field('title');
                    $img = get_sub_field('img');
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    $label = get_sub_field('label');
                    $btn_text = get_sub_field('btn_text');

                    ?>
                    <div class="cards_card" data-card-index="1">
                        <img src="<?php echo esc_url($img['url']); ?>" />
                        <div class="card_label">
                            <div class="card_label_wrapper">
                                <img src="<?php echo esc_url($icon['url']); ?>" />
                                <div><?php echo $title; ?></div>
                            </div>
                            <span><?php echo $label; ?></span>
                        </div>
                        <ul>
                            <?php echo $text; ?>
                        </ul>
                        <button><?php echo $btn_text; ?></button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('cards_card_2') ):
                while( have_rows('cards_card_2') ) : the_row();
                    $title = get_sub_field('title');
                    $img = get_sub_field('img');
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    $label = get_sub_field('label');
                    $btn_text = get_sub_field('btn_text');

                    ?>
                    <div class="cards_card" data-card-index="2">
                        <img src="<?php echo esc_url($img['url']); ?>" />
                        <div class="card_label">
                            <div class="card_label_wrapper">
                                <img src="<?php echo esc_url($icon['url']); ?>" />
                                <div><?php echo $title; ?></div>
                            </div>
                            <span><?php echo $label; ?></span>
                        </div>
                        <ul>
                            <?php echo $text; ?>
                        </ul>
                        <button><?php echo $btn_text; ?></button>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>

    <div class="home_gear5_lower_container">
        <?php $accordionopen = get_field('accordionopen'); ?>
        <?php $accordionclose = get_field('accordionclose'); ?>

        <?php $image = get_field('home_gear5_lower_container_img'); ?>
        <img
                src="<?php echo esc_url($image['url']); ?>"
        />
        <?php if( get_field('home_gear5_lower_container_title') ): ?>
            <h2><?php the_field('home_gear5_lower_container_title'); ?></h2>
        <?php endif; ?>
        <div class="home_gear5_accordion">

            <?php 
            if( have_rows('accordion_item_1') ):
                while( have_rows('accordion_item_1') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                    ?>
                    <div class="accordion_item">
                        <span><?php echo $title; ?></span>
                        <span class="text_opened"><?php echo $text; ?></span>
                        <button>
                            <img
                                    class="open"
                                    src="<?php echo esc_url($accordionopen['url']); ?>"
                            />
                            <img
                                    class="close"
                                    src="<?php echo esc_url($accordionclose['url']); ?>"
                            />
                        </button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('accordion_item_2') ):
                while( have_rows('accordion_item_2') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                    ?>
                    <div class="accordion_item">
                        <span><?php echo $title; ?></span>
                        <span class="text_opened"><?php echo $text; ?></span>
                        <button>
                            <img
                                    class="open"
                                    src="<?php echo esc_url($accordionopen['url']); ?>"
                            />
                            <img
                                    class="close"
                                    src="<?php echo esc_url($accordionclose['url']); ?>"
                            />
                        </button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('accordion_item_3') ):
                while( have_rows('accordion_item_3') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                    ?>
                    <div class="accordion_item">
                        <span><?php echo $title; ?></span>
                        <span class="text_opened"><?php echo $text; ?></span>
                        <button>
                            <img
                                    class="open"
                                    src="<?php echo esc_url($accordionopen['url']); ?>"
                            />
                            <img
                                    class="close"
                                    src="<?php echo esc_url($accordionclose['url']); ?>"
                            />
                        </button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('accordion_item_4') ):
                while( have_rows('accordion_item_4') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                    ?>
                    <div class="accordion_item">
                        <span><?php echo $title; ?></span>
                        <span class="text_opened"><?php echo $text; ?></span>
                        <button>
                            <img
                                    class="open"
                                    src="<?php echo esc_url($accordionopen['url']); ?>"
                            />
                            <img
                                    class="close"
                                    src="<?php echo esc_url($accordionclose['url']); ?>"
                            />
                        </button>
                    </div>
                    <?php
                endwhile;
            endif;

            if( have_rows('accordion_item_5') ):
                while( have_rows('accordion_item_5') ) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                    ?>
                    <div class="accordion_item">
                        <span><?php echo $title; ?></span>
                        <span class="text_opened"><?php echo $text; ?></span>
                        <button>
                            <img
                                    class="open"
                                    src="<?php echo esc_url($accordionopen['url']); ?>"
                            />
                            <img
                                    class="close"
                                    src="<?php echo esc_url($accordionclose['url']); ?>"
                            />
                        </button>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>