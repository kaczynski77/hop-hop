<html>

<head>
    <?php wp_head();?>

  <?php single_term_title('You are viewing the section: '); ?>



</head>

<body <?php body_class(); ?>>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
        </div>
    </div>
    <?php get_sidebar('primary'); ?>
    <div class="container">
        <div class="wrapper">
            <div id="header">
                <span><a href='<?php echo get_site_url()?>'>Хоп-хоп</a></span>
                <span>Мужчина</span>
                <span>Женщина</span>
                <span>
                    <?php echo $term_title;?>
</span>
                <!--<span><button onclick='customCheckout(event); displayCheckout();'>test</button></span>-->
                <div class="xoo-wsc-cart-trigger cart-icon"><span></span></div>
                <!-- <?php $ajax_cart_en = 'yes' === get_option('woocommerce_enable_ajax_add_to_cart');
                    if ($ajax_cart_en) {
                        echo 'ajax is enabled';
                    } ?> -->
            </div>
            <?php include 'checkout.php';?>