<html>



<head>
    <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_directory_uri() . '/css/mui.min.css'; ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri() . '/css/style.css'; ?>" rel="stylesheet" type="text/css" />

</head>

<body <?php body_class(); ?>>

    <div class="mui-container">
        <div id="header">

            <!-- <?php $ajax_cart_en = 'yes' === get_option('woocommerce_enable_ajax_add_to_cart');
                    if ($ajax_cart_en) {
                        echo 'ajax is enabled';
                    } ?> -->

        </div>