<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

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



// Get Product Dimensions
  
$product->get_weight();
$product->get_length();
$product->get_width();
$product->get_height();
$product->get_dimensions();
  
// Get Linked Products
  
$product->get_upsell_ids();
$product->get_cross_sell_ids();
$product->get_parent_id();
  
// Get Product Variations and Attributes
 
$product->get_children(); // get variations
$product->get_attributes();
$product->get_default_attributes();
$attributes=$product->get_attribute( 'size' ); //get specific attribute value

//var_dump($attributes);
  
// Get Product Taxonomies
  
$product->get_categories();
$product->get_category_ids();
$product->get_tag_ids();

  
// Get Product General Info
  
$product->get_type();
$product->get_name();
$product->get_slug();
$product->get_date_created();
$product->get_date_modified();
$product->get_status();
$product->get_featured();
$product->get_catalog_visibility();
$long_description=$product->get_description();
$short_description=$product->get_short_description();
$sku=$product->get_sku();
$product->get_menu_order();
$product->get_virtual();
get_header( 'shop' ); ?>


<div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title"><?php woocommerce_page_title(); ?></h1>
        <div class="bread-crumb right-side">
          <?php woocommerce_breadcrumb();?>
        </div>
      </section>
    </div>
  </div>
  <section class="pt-60">
    <div class="container">
      <div class="row">

        <div class="col-md-5 col-sm-5 mb-xs-30">
          <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native"> 
      <a href="<?php echo esc_url( $product_link ); ?>">
        <img src="<?php echo esc_url( $product_thumbnail_url ); ?>" alt="<?php echo esc_html( $product_title ); ?>">
      </a>
           
          </div>
        </div>

        <div class="col-md-7 col-sm-7">
          <div class="row">
            <div class="col-xs-12">
              <div class="product-detail-main">
                <div class="product-item-details">
                  <h1 class="product-item-name"> <a><?php echo esc_html( $product_title ); ?></a></h1>
                  <div class="rating-summary-block">
                    <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                  </div>
                  <div class="price-box"> <?php if ( $sale_price = $product->get_sale_price() ) {?>

  <span class="price"><?php echo $sale_price; ?></span>
<?php   }?>
                 <?php if ( $regular_price = $product->get_regular_price() ) {?>

                        <del class="price old-price"><?php echo $regular_price; ?></del>

<?php } ?> </div>
                  <div class="product-info-stock-sku">
                    <div>
                      <label>Availability: </label>
                      <span class="info-deta">In stock</span> </div>
                    <div>
                      <label>SKU: </label>
                      <span class="info-deta"><?php echo $sku; ?> </span> </div>
                  </div>
                  <p><?php echo $short_description;?></p>
                  <div class="product-size select-arrow mb-20 mt-30">
                    <?php wc_get_template('single-product/add-to-cart/simple.php'); ?>   
                 
                  </div>
                 

                  <div class="bottom-detail">
                    <ul>
                      <li><a href="#"><i class="fa fa-heart-o"></i><span></span>Wishlist</a></li>
                      <li><a href="#"><i class="fa fa-random"></i><span></span>Compare</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i><span></span>Email to Friends</a></li>
                    </ul>
                  </div>

                  <div class="share-link">
                    <label>Share This : </label>
                    <div class="social-link">
                      <ul class="social-icon">
                        <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                        <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                        <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                        <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                        <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php //wc_get_template('single-product/short-description.php'); ?>  
  





<section class="ptb-60 ptb-xs-30">
    <div class="container">
      <div class="product-detail-tab">
        <div class="row">
          <div class="col-md-12">
            <div id="tabs">
              <ul class="nav nav-tabs">
                <li><a class="tab-Description selected" title="Description">Description</a></li>
                <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
              </ul>
            </div>
            <div id="items">
              <div class="tab_content">
                <ul>
                  <li>
                    <div class="items-Description selected gray-bg">
                      <div class="Description"> 
                           <?php wc_get_template('single-product/short-description.php'); ?>   
                           <?php //woocommerce_output_product_data_tabs();?>     
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="items-Product-Tags gray-bg"><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br />
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                  </li>
                  <li>
                    <div class="items-Reviews gray-bg">
                      <div class="comments-area">
                        <h4>Comments<span>(2)</span></h4>
                        <ul class="comment-list mt-30">
                          <li>
                            <div class="comment-user"> <img src="images/comment-user.jpg" alt="Xpent "> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                            <ul class="comment-list child-comment">
                              <li>
                                <div class="comment-user"> <img src="images/comment-user.jpg" alt="Xpent "> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                              <li>
                                <div class="comment-user"> <img src="images/comment-user.jpg" alt="Xpent "> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="comment-user"> <img src="images/comment-user.jpg" alt="Xpent "> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="main-form mt-30">
                        <h4>Leave a comments</h4>
                        <div class="row mt-30">
                          <form >
                            <div class="col-sm-4 mb-30">
                              <input type="text" placeholder="Name" required>
                            </div>
                            <div class="col-sm-4 mb-30">
                              <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-sm-4 mb-30">
                              <input type="text" placeholder="Website" required>
                            </div>
                            <div class="col-xs-12 mb-30">
                              <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-xs-12 mb-30">
                              <button class="btn-black" name="submit" type="submit">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







 <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Products</h5></div>

            <ul class="product_list_widget">
              <li>
   <a href="<?php the_permalink(); ?>"> 
                  <img width="70" height="85" src="images/products/item-small-1.jpg"> 

               <?php      $default_img = '<img src="' . site_url() . '/wp-content/uploads/2018/06/noimg.jpeg' . '"/>';
      $img = ( get_the_post_thumbnail() ) ? get_the_post_thumbnail() : $default_img;
      $id = get_the_ID();   ?>
                  <span class="product-title"><?php echo esc_html( $product_title ); ?></span> 
                </a>


 </li>
</ul>
 </div>
</div>
</div>
</div>
   </section>


<?php
get_footer( 'shop' );?>

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */





<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title"><?php woocommerce_page_title(); ?></h1>
        <div class="bread-crumb right-side">
          <?php woocommerce_breadcrumb();?>
        </div>
      </section>
    </div>
  </div>


 <section class="pt-60">
    <div class="container">
      <div class="row">

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
  <?php if ( apply_filters( 'woocommerce_show_page_title', false ) ) : ?>
    <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
  <?php endif; ?>

  <?php
  /**
   * Hook: woocommerce_archive_description.
   *
   * @hooked woocommerce_taxonomy_archive_description - 10
   * @hooked woocommerce_product_archive_description - 10
   */
  do_action( 'woocommerce_archive_description' );
  ?>
</header>

  <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    //do_action( 'woocommerce_before_main_content' );
  ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php wc_get_template_part( 'content', 'single-product' ); ?>

    <?php endwhile; // end of the loop. ?>

  <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    //do_action( 'woocommerce_after_main_content' );
  ?>





  <?php woocommerce_output_product_data_tabs();?>


  <?php woocommerce_output_related_products();?>


  <?php
    /**
    
     * woocommerce_sidebar hook.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    //get_template_part("template-parts/sidebar/right-sidebar","sidebar-right");
  ?>
</div>
</div>
   </section>
<?php
get_footer( 'shop' );