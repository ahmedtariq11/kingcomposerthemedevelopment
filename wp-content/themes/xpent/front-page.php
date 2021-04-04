

<?php get_header();?>


  <!-- BANNER STRAT -->
  <div class="banner">
    <div class="container">
      <div class="row m-0">
        <div class="col-md-3"></div>
        <div class="col-md-9 p-0">
          <div class="main-banner">
            <div class="banner1"> <img src="images/slider/slider-image-1.jpg" alt=" ">
              <div class="banner-detail">
                <div class="banner-detail-inner"> 
                  <span class="slogan">Men’s Categories</span>
                  <h1 class="banner-title">Fashion Sale</h1>
                  <span class="slogan">Get Now - Sale Off 30%</span><br>
                  <a href="#" class="btn btn-color">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="banner2"> <img src="images/slider/slider-image-2.jpg" alt=" ">
              <div class="banner-detail">
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center">
                    <div class="banner-detail-inner"> 
                      <span class="slogan">Women’s Categories</span>
                      <h1 class="banner-title">Fashion Sale</h1>
                      <span class="slogan">Get Now - Sale Off 30%</span><br>
                      <a href="#" class="btn btn-color">Shop Now</a>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner3"> <img src="images/slider/slider-image-3.jpg" alt=" ">
              <div class="banner-detail">
                <div class="banner-detail-inner"> 
                  <span class="slogan">The wait is over</span>
                  <h1 class="banner-title">Our online shop</h1>
                  <span class="slogan">Get Now - Sale Off 5%</span><br>
                  <a href="#" class="btn btn-color">Shop Now</a>
                </div>
              </div>
              </div>
            </div>
          </div> 
      </div>
    </div>
  </div>
<?php get_template_part( '/template-parts/front-page/products' ); ?>





  <!--  Featured Products Slider Block End  --> 

  <!-- perellex-banner Start -->
  <section class="ptb-60 ptb-xs-30">
    <div class="parallax-bg client-bg align-center dark-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 mtb-40 ptb-60">
            <h1><?php echo $Section ['heading'];?></h1>
            <p><?php echo $Section ['sub_heading'];?></p>

            <a href="" class="btn btn-color"><?php echo $Section['btn_txt']?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- perellex-banner End -->

  

   <!--  Site Services Features Block Start  -->
  <section class="pb-60 pb-xs-30">
    <div class="service-block center-sm">
    <div class="container">
<?php 
      $args = array( 'post_type' => 'icon' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?> 
        <div class="row">
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-truck"></i>

<?php 
        $Delivery = get_post_meta( get_the_ID(), 'Delivery', true);
        $Delivery1 = get_post_meta( get_the_ID(), 'Delivery1', true);
     
              echo '<div class="title">' . $Delivery  . '</div>';
               echo ' <div class="subtitle">' . $Delivery1  . '</div>';
?>

            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-users"></i>
<?php 
        $Dollar = get_post_meta( get_the_ID(), 'Dollar', true);
        $Dollar1 = get_post_meta( get_the_ID(), 'Dollar1', true);
     
              echo '<div class="title">' . $Dollar  . '</div>';
               echo ' <div class="subtitle">' . $Dollar1  . '</div>';
?>
             
            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-shield"></i>
             <?php 
        $Hour = get_post_meta( get_the_ID(), 'Hour', true);
        $Online = get_post_meta( get_the_ID(), 'Online', true);
     
              echo '<div class="title">' . $Hour  . '</div>';
               echo ' <div class="subtitle">' . $Online  . '</div>';
?>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 feature-box-main">
            <div class="feature-box">
              <i class="fa fa-usd"></i>
              <?php 
        $Payment = get_post_meta( get_the_ID(), 'Payment', true);
        $Payment1 = get_post_meta( get_the_ID(), 'Payment1', true);
     
              echo '<div class="title">' . $Payment  . '</div>';
               echo ' <div class="subtitle">' . $Payment1  . '</div>';
?>
            </div>
          </div>
        </div>
<?php endwhile; ?>
      </div>
    </div>
  </section>
  <!--  Site Services Features Block End  -->
   
  <!--  Blog Slider Block Start  -->
  <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-sm-30">
          <div class="heading-part mb-20">
            <h2 class="main_title">Latest Blog</h2>
          </div>
          <div class="row blog-mobile-m">
            <div id="news" class="owl-carousel">
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media">                         
                        <a href="single-blog.html" title="" class="read">
                        <img src="<?php echo THEME_URI;?>/images/blog/blog-1.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, nulla accusantium ut blanditiis quas, repellendus voluptates rem provident qui dolorem minus id vero repellat.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a href="#"> Xpent</a></li>
                            <li><a href="#">(5) comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media">
                        <a href="single-blog.html" title="" class="read">
                        <img src="images/blog/blog-2.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eum, similique, quia, saepe ea distinctio soluta nobis architecto accusamus ullam accusantium.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a href="#"> Xpent</a></li>
                            <li><a href="#">(5) comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="blog-media"> 
                        <a href="single-blog.html" title="" class="read">
                        <img src="<?php echo THEME_URI;?>/images/blog/blog-3.jpg" alt=" "> 
                        </a> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="blog-detail">
                        <div class="date">27 Jan 2018</div>
                        <h3><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quasi quas iusto quaerat. Architecto, velit nostrum laborum aliquid hic impedit quis porro, sunt id dolorem error.</p>
                        <hr>
                        <div class="post-info">
                          <ul>
                            <li><span>By</span><a href="#"> Xpent</a></li>
                            <li><a href="#">(5) comments</a></li>
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

         <div class="col-md-4">
            <div class="client-inner testimonial-block">
              <div id="client" class="owl-carousel">
                <div class="item client-detail">
                  <div class="client-img"> <img src="<?php echo THEME_URI;?>/images/testimonial/testimonial-1.jpg" alt="Xpent"> </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, amet cumque ad similique laboriosam."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
                <div class="item client-detail">
                  <div class="client-img"> <img src="<?php echo THEME_URI;?>/images/testimonial/testimonial-2.jpg" alt="Xpent"> </div>
                  <p>"Temporibus dicta soluta, distinctio voluptatum, non culpa quod vitae laudantium! Esse qui, labore ducimus."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
                <div class="item client-detail">
                  <div class="client-img"> <img src="<?php echo THEME_URI;?>/images/testimonial/testimonial-3.jpg" alt="Xpent"> </div>
                  <p>"Ipsum dolor sit amet, consectetur adipisicing elit. Molestias modi, dolor a voluptatibus, quaerat, at rerum, explicabo temporibus."</p>
                  <h4 class="sub-title client-title">Marketing</h4>
                  <div class="date">Dec, 12 2017</div>
                </div>
              </div>
            </div>
         </div>
      </div>
    </div>
  </section>
  <!--  Blog Slider Block End  -->
  
  <!-- Brand logo block Start  -->
  <section class="ptb-30">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="heading-part mb-20">
            <h2 class="main_title">Our Brands</h2>
          </div>
        </div>
      </div>
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel align_center">
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-1.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-2.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-3.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-4.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-5.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-6.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-7.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-8.jpg" alt=" "></a></div>
            <div class="item"><a href="#"><img src="<?php echo THEME_URI;?>/images/brands/brand-9.jpg" alt=" "></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand logo block End  --> 

<!-- Bottom Widget Products  -->
  <section class="pb-60 pb-xs-30">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-1.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-2.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-3.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                </div>
              </li>
            </ul>

          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Top Rated Products</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-4.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-5.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-6.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="widget widget_products">
            <div class="widget-title-wrap"><h5 class="widget-title">Recent Reviews</h5></div>

            <ul class="product_list_widget">
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-7.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-8.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#"> 
                  <img width="70" height="85" src="<?php echo THEME_URI;?>/images/products/item-small-9.jpg"> 
                  <span class="product-title">Ecstasy Ladis Cloth</span> 
                </a> 
                <div class="price-box"> 
                  <span class="price">$30.00</span> <del class="price old-price">$100.00</del>
                  <div class="item-rating">
                   <div title="60%" class="rating-result"> <span style="width:60%"></span> </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Bottom Widget Products Ends -->


<?php get_footer();?>