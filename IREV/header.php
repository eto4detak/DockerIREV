<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header_wrapper">
        <div>
            <?php $image = get_field('header_logo'); ?>
            <img class="header_logo" src="<?php echo esc_url($image['url']); ?>"
                 alt="<?php echo $image['alt']; ?>"/>
        </div>
        <?php irev_nav_menu( [ 'menu'  => 'header' ] ); ?>
        
        <?php if( get_field('header_signin') ): ?>
            <button class="header_signIn"><?php the_field('header_signin'); ?></button>
        <?php endif; ?>
        <button class="header_hamburger">
            <img src="<?php echo esc_url(get_theme_file_uri('src/icons/hamburgerIcon.svg')); ?>"
                 alt="hamburger"
            />
        </button>
    </div>
</header>

