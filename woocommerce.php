<?php get_header(); ?>

<div id="main" class="row">

    <div id="content" class="col-lg-12 col-sm-6 col-md-6 col-xs-12">



        <?php wc_get_product_category_list('men'); ?>
        <?php woocommerce_get_product_subcategories(); ?>
        <?php woocommerce_content(); ?>

        <?php woocommerce_breadcrumb() ?>
    </div>
</div>
<?php get_footer(); ?>