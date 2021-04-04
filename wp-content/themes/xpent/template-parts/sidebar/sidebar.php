
<?php if ( ! defined( 'ABSPATH' ) ) {
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
// Get Product Variations and Attributes
 
$attributeidvariation=$product->get_children(); // get variations
$attributeidvariation1=$product->get_attributes();
$product->get_default_attributes();
//$attributeid1=$product->get_attribute( 'color' ); //get specific attribute value
//$list=$product->list_attributes();

?>

<div class="col-md-3 col-sm-4 mb-xs-30">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Categories</h3>
              </div>
<?php $parentid = get_queried_object_id();
 
$args = array(
    'parent' => $parentid
);
 
$terms = get_terms( 'product_cat', $args ); ?>

              <div class="sidebar-contant">
           <?php   if ( $terms ) {
    echo '<ul>';
 
    foreach ( $terms as $term ) {
        echo '<li >';                 
           // woocommerce_subcategory_thumbnail( $term );
           
                echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">' ;
                    echo $term->name;
                   
                     echo '<span>' ;
                    echo ($term->count);
                   
                echo '</span>';
                echo '</a>';
            
        echo '</li>';
    }
 
    echo '</ul>';
}
?>



              </div>





            </div>
            <div class="sidebar-box gray-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Shop by</h3>
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Category</div>
                 <?php $parentid = get_queried_object_id();
 
$args = array(
    'parent' => $parentid
);
 
$terms = get_terms( 'product_cat', $args ); ?>

             
           <?php   if ( $terms ) {
    echo '<ul>';
 
    foreach ( $terms as $term ) {
        echo '<li >';                 
           // woocommerce_subcategory_thumbnail( $term );
           
                echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">' ;
                    echo $term->name;
                   
                     echo '<span>' ;
                    echo ($term->count);
                   
                echo '</span>';
                echo '</a>';
            
        echo '</li>';
    }
 
    echo '</ul>';
}
?>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
             





                </div>

                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a>Augue congue <span>(0)</span></a></li>
                    <li><a>Eu magna <span>(05)</span></a></li>
                    <li><a>Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>


            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Best Seller</h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>

                    <div class="pro-media">   <a href="<?php echo esc_url( $product_link ); ?>">
        <img src="<?php echo esc_url( $product_thumbnail_url ); ?>" alt="<?php echo esc_html( $product_title ); ?>">
      </a></div>
                    <div class="pro-detail-info"> <a><?php echo esc_html( $product_title ); ?></a>
                    <?php if ( $sale_price = $product->get_sale_price() ) {?>

  <span class="price"><?php echo $sale_price; ?></span>
<?php   }?>
                 <?php if ( $regular_price = $product->get_regular_price() ) {?>

                        <del class="price old-price"><?php echo $regular_price; ?></del>

<?php } ?>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>



