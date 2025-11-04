<?php
    require_once get_template_directory() . '/inc/assets.php';

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


function irev_insurance_widgets_init() {

	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'mavix-insurance' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'irev_insurance_widgets_init' );


//# контакт форм 7 убрать тэги p
add_filter('wpcf7_autop_or_not', '__return_false');
//# заменить input на button
add_filter( 'wpcf7_form_elements', function ( $html ) {

	preg_match( '~<input([^>]+)type=["\']submit["\']([^>/]+)/?>~i', $html, $match );

	if( $match ){
		$input = $match[0];
		$attr = trim( $match[1] . $match[2] );

		preg_match( '/value=["\']([^"\']+)/', $input, $mm );
		$button_text = $mm[1];

		$html = str_replace( $input, "<button id='submitButton' $attr>$button_text</button>", $html );
	}

	return $html;

} );




/**
 * Пользовательский класс walker для навигационных меню.
 */
class My_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * Добавляет классы к подменю (ul).
	 *
	 * @return void
	 */
	function start_lvl( &$output, $depth = 0, $args = null ) {
		// классы, зависящие от уровня вложенности
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // отступ в коде
		$display_depth = ( $depth + 1); // потому что первый уровень подменю считается как 0
		$classes = [
			'sub-menu',
			( $display_depth % 2 ? 'menu-odd' : 'menu-even' ),
			( $display_depth >= 2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth,
		];
		$class_names = implode( ' ', $classes );

		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	//

	/**
	 * Добавляет основные классы для li и ссылок.
	 *
	 * @return void
	 */
	function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$item = $data_object; // используем более описательное имя для использования внутри этого метода.

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // отступ в коде

		// классы, зависящие от уровня вложенности
		$depth_classes = [
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >= 2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth,
		];
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// переданные классы
		$classes = empty( $item->classes ) ? [] : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// создание HTML
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

		// атрибуты ссылки
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		$item_output = strtr( '{BEFORE}<a{ATTRIBUTES}>{LINK_BEFORE}{TITLE}{LINK_AFTER}</a>{AFTER}', [
			'{BEFORE}'      => $args->before,
			'{ATTRIBUTES}'  => $attributes,
			'{LINK_BEFORE}' => $args->link_before,
			'{TITLE}'       => apply_filters( 'the_title', $item->title, $item->ID ),
			'{LINK_AFTER}'  => $args->link_after,
			'{AFTER}'       => $args->after,
		] );

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}
function irev_nav_menu( $args ) {

	$args = array_merge( [
		'container'       => '',
		'container_id'    => 'top-navigation-primary',
		'container_class' => 'top-navigation',
		'menu_class'      => 'menu main-menu menu-depth-0 menu-even',
		'echo'            => false,
		'items_wrap'      => '<nav class="header_nav"><div class="header_menu">%3$s</nav>',
		'depth'           => 10,
		'walker'          => new My_Walker_Nav_Menu()
	], $args );

	echo wp_nav_menu( $args );
}