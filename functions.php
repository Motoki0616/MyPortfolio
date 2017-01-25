<?php

//Adding custom Class to the excerpt
function add_excerpt_class( $excerpt )
{
    $excerpt = str_replace( "<p", "<p class=\"work__text\"", $excerpt );
    return $excerpt;
}

add_filter( "the_excerpt", "add_excerpt_class" );

//Adding Menu
add_theme_support( 'menus' );

function register_theme_menu(){
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}

add_action('init', 'register_theme_menu');

//Deleting Menu li's id
function theme_optimize_menu_id()
{
    return '';
}
add_filter('nav_menu_item_id', 'theme_optimize_menu_id');

//Deleting Menu li's Class
function theme_optimize_menu_class($classes, $item)
{
    return array('nav__item');
}
add_filter('nav_menu_css_class', 'theme_optimize_menu_class', 10, 2);


//Adding thumbnail Image
add_theme_support( 'post-thumbnails' );

//Adding CSS Files
function wpm_theme_styles() {
	wp_enqueue_style('fullpage_css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.8.8/jquery.fullPage.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpm_theme_styles');

//Adding Javascript Files
function wpm_theme_js(){
	wp_enqueue_script('fontawesome_js', 'https://use.fontawesome.com/2a238dff2a.js', '', '', false);
	wp_enqueue_script('fullpage_js', 'https://cdn.jsdelivr.net/jquery.fullpage/2.8.8/jquery.fullpage.extensions.min.js', array('jquery'), '', true);
    wp_enqueue_script('tweenmax_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array('jquery'), '', true);
    wp_enqueue_script('smoothstate_js', 'https://cdn.jsdelivr.net/jquery.smoothstate/0.7.2/jquery.smoothState.min.js', array('jquery'), '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery','fullpage_js','tweenmax_js','smoothstate_js'), '', true);
}

add_action('wp_enqueue_scripts', 'wpm_theme_js');
