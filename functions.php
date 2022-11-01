<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');



function hophop_styles() {
    wp_enqueue_style( 'mui', get_template_directory_uri() . '/css/mui.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(),  filemtime( get_stylesheet_directory_uri() . '/css/style.css'));
	
    
}
function hophop_scripts() {

	wp_enqueue_script( 'mui', get_template_directory_uri() . '/js/mui.min.js', array(), );
     wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(),  filemtime( get_stylesheet_directory_uri() . '/js/main.js') );
}

function hophop_fonts() {
    wp_enqueue_style( 'futurabookc', get_template_directory_uri() . '/fonts/futurabookc.otf', false );
    wp_enqueue_style( 'FUTURADEMIC-ITALIC', get_template_directory_uri() . '/fonts/FUTURADEMIC-ITALIC.TTF', false );
    wp_enqueue_style( 'FUTURADEMIC', get_template_directory_uri() . '/fonts/FUTURADEMIC.TTF', false );
}

add_action( 'wp_enqueue_scripts', 'hophop_fonts' );
add_action( 'wp_enqueue_scripts', 'hophop_styles' );
add_action( 'wp_enqueue_scripts', 'hophop_scripts' );

add_action( 'wp_ajax_getCheckoutPageContent', 'getCheckoutPageContentCallBack' );
add_action( 'wp_ajax_nopriv_getCheckoutPageContent', 'getCheckoutPageContentCallBack' );

function getCheckoutPageContentCallBack() {
    echo do_shortcode('[woocommerce_checkout]');
    die();
}

add_action( 'wp_ajax_wcProducts', 'wcProductsCallBack' );
add_action( 'wp_ajax_nopriv_wcProducts', 'wcProductsCallBack' );

function wcProductsCallBack(){
    $tag=$_POST['tag'];
    echo do_shortcode('[products tag='.$tag.']');
    die();
}

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &gt; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'breadcrumb', 'woocommerce' ),
        );
}



   