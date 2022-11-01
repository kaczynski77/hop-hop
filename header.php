<html>

<head>
    <?php wp_head();
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    
    ?>




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
                <span><?php var_dump($actual_link)?></span>
                <!--<span><button onclick='customCheckout(event); displayCheckout();'>test</button></span>-->
                <div class="xoo-wsc-cart-trigger cart-icon"><span></span></div>
                <!-- <?php $ajax_cart_en = 'yes' === get_option('woocommerce_enable_ajax_add_to_cart');
                    if ($ajax_cart_en) {
                        echo 'ajax is enabled';
                    } ?> -->
            </div>
            <?php include 'checkout.php';?>