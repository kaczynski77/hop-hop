 <?php 
    /*
        Template Name:costom shop
    */

    get_header();
    ?>

 <?php  
      $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'orderby' => 'rand'
        );

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 <div class="row">
     <div class="col-md-12">
         <h2><?php the_title() ?></h2>
         <div>
             <div class="row">
                 <div class="col-md-6">
                     <?php the_post_thumbnail(); ?>
                 </div>
                 <div class="col-md-6">
                     <a href="#!" data-productid="<?php echo $post->ID; ?>" class="btn btn-primary"
                         onclick="customCheckout(event)">Add to Cart</a>
                 </div>
             </div>
             <strong>Description</strong>
             <div><?php the_excerpt(); ?></div>
         </div>
     </div>
 </div>

 <?php endwhile; else : ?>

 <p>There in no product :( </p>

 <?php endif;
    wp_reset_postdata(); ?>