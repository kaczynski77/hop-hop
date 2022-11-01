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

// The shortcode function
function my_get_cat() { 
  
   global $post;

       $terms = get_the_terms( $post->ID, 'product_cat' );

        $nterms = get_the_terms( $post->ID, 'product_tag'  );

        foreach ($terms  as $term  ) {                    

            $product_cat_id = $term->term_id;              

            $product_cat_name = $term->name;            

            break;

        }

       echo $product_cat_name;

}
// Register shortcode
add_shortcode('get_category', 'my_get_cat'); 



   