<?php


add_action( 'after_setup_theme', 'wp_kama_theme_setup' );
function wp_kama_theme_setup(){
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
}

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( '', get_stylesheet_uri());
}
// ***************************************
function scriptMain() {
if ( is_page('29') )
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main/script.js', true );
}
add_action( 'wp_enqueue_scripts', 'scriptMain' );
// ******************
function scriptContact() {
if ( is_page('71') )
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/contact/script.js', true );
}
add_action( 'wp_enqueue_scripts', 'scriptContact' );
// *******************
function scriptBlog() {
if ( is_page('33') )
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/blog/script.js', true );
}
add_action( 'wp_enqueue_scripts', 'scriptBlog' );
// *******************

// для одиночного поста записать последней!
function scriptSingle() {
if ( is_post )
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/single/script.js', true );
}
add_action( 'wp_enqueue_scripts', 'scriptSingle' );
// *******************


add_filter( 'script_loader_tag', 'scripts_as_es6_modules', 10, 3 );
function scripts_as_es6_modules( $tag, $handle, $src ) {
	if ( 'script' === $handle ) {
		return str_replace( '<script ', '<script type="module"', $tag );
	}
	return $tag;
}
// *******************************************



add_theme_support( 'post-thumbnails', array( 'post' ) ); // для записей