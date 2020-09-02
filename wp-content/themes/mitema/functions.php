<?php

// cargo los recursos que necesito para mi tema
function mitema_scripts() {
	//carga los css
	wp_enqueue_style('mitema_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('mitema_style', get_stylesheet_uri());
	//carga los js
	wp_enqueue_script('jquery');
	wp_enqueue_script('mitema_popper', get_template_directory_uri() . '/assets/js/popper.js');
	wp_enqueue_script('mitema_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js');
}
add_action('wp_enqueue_scripts', 'mitema_scripts');

//registrar un menu
function mitema_menus() {
	register_nav_menu('main-menu', __('Menú principal'));
}
add_action('init', 'mitema_menus');

//registrar un sidebar
function mitema_sidebar() {
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __('Sidebar del post'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>'
		)
	);
}
add_action('widgets_init', 'mitema_sidebar');

// dar soporte a las imagenes destacadas
add_theme_support('post-thumbnails');

?>