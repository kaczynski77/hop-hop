<?php if ( is_singular( 'product' ) ) {
       woocommerce_get_template( 'single-product.php' );
  }else{
   //For ANY product archive.
   //Product taxonomy, product search or /shop landing
    woocommerce_get_template( 'archive-product.php' );
  }
  ?>