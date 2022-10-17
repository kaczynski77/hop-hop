<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');



function hophop_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(),  filemtime( get_stylesheet_directory_uri() . '/css/style.css'));
	wp_enqueue_style( 'mui', get_template_directory_uri() . '/css/mui.min.css' );
    
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


        $product_id        = absint( $_POST['product_id'] );
        $quantity          = absint( $_POST['quantity'] );
        $product_status    = get_post_status( $product_id );
        $passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );

        if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity ) && 'publish' === $product_status ) {

            do_action( 'woocommerce_ajax_added_to_cart', $product_id );
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();

            wc_setcookie( 'woocommerce_items_in_cart', count( $items ) );
            wc_setcookie( 'woocommerce_cart_hash', md5( json_encode( $items ) ) );
            do_action( 'woocommerce_set_cart_cookies', true );

            define( 'WOOCOMMERCE_CHECKOUT', true );
            echo do_shortcode('[woocommerce_checkout]');


        } else {

            echo "Something went wrong, please try again later.";
        }

        die();
    }

    