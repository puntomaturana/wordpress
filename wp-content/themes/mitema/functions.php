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

?>