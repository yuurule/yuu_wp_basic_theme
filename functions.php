<?php
if(!function_exists('basic_theme_wp_setup')) {

    function basic_theme_wp_setup() {

        load_theme_textdomain( 'basic-theme', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 400 );
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'basic-theme' )
			)
		);
        add_theme_support( 'responsive-embeds' );
    }

}
add_action('after_setup_theme', 'basic_theme_wp_setup');

function basic_theme_wp_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'basic-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'basic-theme' ),
			'before_widget' => '<div id="%1$s" class="widget mb-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'basic_theme_wp_widgets_init' );

if(!function_exists('basic_theme_wp_style_enqueue')) {

    function basic_theme_wp_style_enqueue() {
        $theme_version = wp_get_theme()->get( 'Version' );

        // Styles
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), $theme_version );
        wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), $theme_version );

        // Scripts
        wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), $theme_version, false);
        wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/c77c89feaf.js', array(), $theme_version, false);
    }

}
add_action('wp_enqueue_scripts', 'basic_theme_wp_style_enqueue');

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'list-inline-item';
    return $classes;
}
add_filter( 'nav_menu_css_class', 'add_classes_on_li', 1, 3);