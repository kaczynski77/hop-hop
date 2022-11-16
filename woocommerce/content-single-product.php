<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;




/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

<div class="main-image">
<?php 


	echo get_the_post_thumbnail();


?>
</div>
<div class="right-side">
	<div class="summary entry-summary test">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
</div>

<div class="three-images">
	<?php 
	$gallery_images = $product->gallery_image_ids;
	foreach($gallery_images as $key => $value) {
	//echo $value;
	if ($key < 3) echo wp_get_attachment_image($value);

} ?>
</div>

<div class="bottom">
	<div class="info">
		<span class="description">
		<span class="info-title"> Описание </span>
		<span class="info-text"> Описание </span>
		<span class="info-text"> Описание </span>
		<span class="info-text"> Описание </span>
		</span>
		<span class="compound">
		<span class="info-title"> Состав </span>
		<span class="info-text"> Описание </span>
		<span class="info-text"> Описание </span>
		<span class="info-text"> Описание </span>
		</span>
		<span class="care">
		<span class="info-title"> Уход</span>
		<span class="pictograms">
		<span class="info-pictogram"> * </span>
		<span class="info-pictogram"> * </span>
		<span class="info-pictogram"> *</span>
</span>
		</span>
		</span>

</div>
<div class="two-images"><?php 
	$gallery_images = $product->gallery_image_ids;
	foreach($gallery_images as $key => $value) {
	//echo $value;
	if ($key > 2) echo wp_get_attachment_image($value);

} ?></div>
</div>



</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
