<?php get_header(); ?>

<div id="woo-custom" class="row">

    <div id="content">
        <?php wc_get_product_category_list('men'); ?>
        <?php woocommerce_get_product_subcategories(); ?>
        <?php woocommerce_content(); ?>
        <?php woocommerce_breadcrumb() ?>
    </div>
</div>
<?php get_footer(); ?>