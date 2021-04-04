









  <?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
 

  
<?php
if ( woocommerce_product_loop() ) {

  /**
   * Hook: woocommerce_before_shop_loop.
   *
   * @hooked wc_print_notices - 10
   * @hooked woocommerce_result_count - 20
   * @hooked woocommerce_catalog_ordering - 30
   */
  do_action( 'woocommerce_before_shop_loop' );

?>

   <div class="banner inner-banner">
    <div class="container">
      <section class="banner-detail">
        <?php woocommerce_breadcrumb(); ?>
          <!-- /.breadcrumb-inner -->
      </section>
      <!-- /.container -->
    </div>
  </div>
  <section class="ptb-60">
    <div class="container">
      <div class="row">
        <?php get_template_part("template-parts/sidebar/sidebar", "sidebar"); ?>
          <div class="col-md-9 col-sm-8">
            <div class="shorting mb-30">
              <div class="row">
                   <div class="col-md-6">
                        <div class="view">
                          <div class="list-types grid active ">
                            <a href="shop.html">
                              <div class="grid-icon list-types-icon"></div>
                            </a>
                          </div>
                          <div class="list-types list">
                            <a href="shop-list.html">
                              <div class="list-icon list-types-icon"></div>
                            </a>
                          </div>
                        </div>
                        <div class="short-by float-right-sm"> <span>Sort By</span>
                          <div class="select-item">
                            <?php woocommerce_catalog_ordering(); ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <?php xpent_woocommerce_catalog_page_ordering(); ?>
                      </div>
              </div>
            </div>
<?php
//  woocommerce_product_loop_start();

  if ( wc_get_loop_prop( 'total' ) ) {
    while ( have_posts() ) {
      the_post();

      /**
       * Hook: woocommerce_shop_loop.
       *
       * @hooked WC_Structured_Data::generate_product_data() - 10
       */
      do_action( 'woocommerce_shop_loop' );
      $default_img = '<img src="' . site_url() . '/wp-content/uploads/2018/06/noimg.jpeg' . '"/>';
      $img = ( get_the_post_thumbnail() ) ? get_the_post_thumbnail() : $default_img;
      $id = get_the_ID();
      ?>
      <div class="col-md-4">
      <div class="product-item">
                        <?php wc_get_template('loop/sale-flash.php'); ?>
        <div class="product-image"> 
        <a href="<?php the_permalink(); ?>"><?php echo $img; ?></a>
        <div class="product-detail-inner">
        <?php wc_get_template('loop/add-to-cart.php'); ?>
        </div>
      </div>
        <div class="product-item-details">
     <div class="item-title">
                             <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </div>


                            <div class="price-box">
                              <?php wc_get_template('loop/price.php'); ?>
                                <?php add_star_rating(); ?>
                           
                       
                      </div>
                          </div>
     </div>
      </div>
<?php
//      wc_get_template_part( 'content', 'product' );
    }
  }

//  woocommerce_product_loop_end();
?>
    </div>
  </div>
<?php
  /**
   * Hook: woocommerce_after_shop_loop.
   *
   * @hooked woocommerce_pagination - 10
   */
  do_action( 'woocommerce_after_shop_loop' );
} else {
  /**
   * Hook: woocommerce_no_products_found.
   *
   * @hooked wc_no_products_found - 10
   */
  do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

</div>
          <div class="row">
            <div class="col-xs-12">
           <?php flipmart_pagination(); ?>
         </div>
          </div> <!-- row    <!-->

      </div><!-- row     <!-->
    </div><!-- product-listing     <!-->
    </div><!-- row     <!-->
    </div><!-- container     <!-->
  </section> <!-- section     <!-->
  <?php get_footer(); 

 