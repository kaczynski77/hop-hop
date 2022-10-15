<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');

add_action( 'wp_enqueue_scripts', 'hophop_styles' );
add_action( 'wp_enqueue_scripts', 'hophop_scripts' );

function hophop_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(),  filemtime( get_stylesheet_directory_uri() . '/css/style.css'));
	wp_enqueue_style( 'mui', get_template_directory_uri() . '/css/mui.min.css' );
    
}
function hophop_scripts() {

	wp_enqueue_script( 'mui', get_template_directory_uri() . '/js/mui.min.js', array(), );
     wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(),  filemtime( get_stylesheet_directory_uri() . '/js/main.js') );
}

/* add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
  
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Primary Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
} */


/**
 * Show cart contents / total Ajax

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
<?php
    $fragments['a.cart-customlocation'] = ob_get_clean();
    return $fragments;
}

function woocommerce_custom_add_to_cart_text($add_to_cart_text, $product)
{
    // Get cart
    $cart = WC()->cart;

    // If cart is NOT empty
    if (!$cart->is_empty()) {

        // Iterating though each cart items
        foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
            // Get product id in cart
            $_product_id = $cart_item['product_id'];

            // Compare 
            if ($product->get_id() == $_product_id) {
                // Change text
                $add_to_cart_text = __('Добален в корзину', 'woocommerce');
                break;
            }
        }
    }

    return $add_to_cart_text;
}
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_add_to_cart_text', 10, 2);



 */
