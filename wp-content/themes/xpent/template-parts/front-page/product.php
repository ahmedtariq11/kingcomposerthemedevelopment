<?php /* Template Name:product    */    ?>
<?php 




global $product;

$product_id            = get_the_ID();
$product               = wc_get_product( $product_id );
$product_thumbnail_url = get_the_post_thumbnail_url( $product_id, 'medium' );
$product_title         = get_the_title();
$product_link          = get_the_permalink();
$sale_price            = $product->get_sale_price();
$regular_price         = $product->get_regular_price();
$is_product_on_sale    = $product->is_on_sale();
$is_product_in_stock   = $product->is_in_stock();
$product_price         = $product->get_price_html();
$discount_percent      = ! empty( $sale_price ) ? floatval( ( $regular_price - $sale_price ) / $regular_price * 100 )  : 0;

?>










  
  <!--  Featured Products Slider Block Start  -->
  <section class="pt-60 pt-xs-30">
    <div class="container">

        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part mb-20">
              <h2 class="main_title">Featured Products</h2>
            </div>
          </div>
        </div>

        <div class="featured-product">
          <div class="row mlr_-20">


            <div class="col-md-3 col-sm-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image"> 
               <a href="<?php echo esc_url( $product_link ); ?>">
        <img src="<?php echo esc_url( $product_thumbnail_url ); ?>" alt="<?php echo esc_html( $product_title ); ?>">
      </a>
                  <div class="product-detail-inner">
                    <?php wc_get_template('loop/add-to-cart.php'); ?>
                  </div>
                </div>
                <div class="product-item-details">
                  <div class="item-title"> 
                    <a href="<?php the_permalink();?>"><?php echo esc_html( $product_title ); ?></a>
                  </div>
                  <div class="price-box"> 
                    <?php if ( $sale_price = $product->get_regular_price() ) {?>
                       <span class="price"><?php echo $sale_price; ?></span>
<?php   }?>
                 <?php if ( $regular_price = $product->get_regular_price() ) {?>

                        <del class="price old-price"><?php echo $regular_price; ?></del>

<?php } ?>
                      <div class="item-rating">
                        <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

    </div>
</section>

 
  
  
 



























