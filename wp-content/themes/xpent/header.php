<!DOCTYPE html>
<html <?php  language_attributes();?>>
<head>
  <meta charset="<?php  bloginfo('charset');?>">
  <title> Xpent - eCommerce HTML Template</title>
  
  <!-- SEO Meta
    ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">

  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS
    ================================================== -->
  

  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="<?php echo THEME_URI;?>/images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_URI;?>/images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
    
    <?php wp_head(); ?>
</head>

<body class="common-home">


<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="row">
        <div class="col-md-6 col-sm-6"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="newsletter-inner"> <img src="<?php echo THEME_URI;?>/images/plane.png" alt=" ">
            <h2 class="main_title">Subscribe Emails</h2>
            <span>Get Latest Products Update</span>
            <p>We hate spam. Just to let you know our offer.</p>
            <form>
              <input type="email" placeholder="Email Here...">
              <button title="Subscribe">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





    <div class="main"> 
  <!-- HEADER START -->
  <header class="navbar navbar-custom" id="header">
    <div class="header-top bg-gray">
      <div class="container">
        <div class="row">
            <div class="col-sm-5">
              <div class="top-link top-link-left">
                  <?php dynamic_sidebar('sidebar-4'); ?>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="top-link right-side">


                  <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'top-leftbar', 
                                             


'container'=>'ul',


'echo' => true,
 'before' => '',
 'after' => '',
 'link_before' => '<span class="hidden-xs hidden-sm hidden-md">',
 'link_after' => '</span>',
 'depth' => 0,
  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                             // 'walker'  => new WP_Bootstrap_Navwalker()



                                               
                                            ) 
                                        );
                                    ?>
</div>
            </div>
          </div>
      </div>
    </div>

<div class="header-middle">
      <div class="container">
      <div class="header-inner">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
          <a class="navbar-brand page-scroll" href="index.html"><?php if(has_custom_logo()):?> <?php the_custom_logo();?><?php endif;?> </a> </div>
        <div class="right-side float-none-sm">
          <div class="right-side float-left-xs header-right-link">

            <ul>
            <li class="main-search">
                <div class="header_search_toggle desktop-view">
                  <form>
                    <div class="search-box">
                      <input class="input-text" type="text" placeholder="Search Here...">
                      <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </li>

               <li class="cart-icon"> <a href="#"><span><i class="fa fa-shopping-cart"></i> <small class="cart-notification">0</small> </span> </a>
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="images/products/item-small-1.jpg"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt=" " src="images/products/item-small-2.jpg"></a>
                          <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                            <p class="cart-price">$29.99</p>
                          </div>
                        </div>
                      </li>
                    </ul>

                
                <?php if (class_exists("WooCommerce")) :  ?>

                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></strong></span> </p>
                    <div class="clearfix"></div>

                    <div class="mt-20"> <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn-color btn">Cart <?php echo WC()->cart->get_cart_contents_count(); ?></a> <a href="<?php wc_cart_totals_order_total_html(); ?><" i class="btn-color btn right-side">Checkout</i></a> </div>
                  <?php endif;?>
                  </div>
                </li>
              <li class="account-icon"> <a href="#"><span><i class="fa fa-heart-o"></i></span></a></li>
            </ul>
          </div>
        </div>
        <div class="header_search_toggle mobile-view">
          <form>
            <div class="search-box">
              <input class="input-text" type="text" placeholder="Search entire store here...">
              <button class="search-btn"></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  <div class="header-bottom">
    <div class="container position-r">
      <div class="row m-0">
        <div class="col-md-3 position-i p-0">
            <div class="sidebar-menu-dropdown home ptb-20">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories</a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                     
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll">Cloths<i class="fa fa-angle-right right-side"></i></a>
                        <div class="megamenu mobile-sub-menu">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">

                            <li class="level2">
                                <a href="shop.html"><span>Kids Fashion</span></a>
                            


     <?php
        if (has_nav_menu('shop_subcat1')) {
                wp_nav_menu( array(
          'theme_location'    => 'shop_subcat1',

          'before'=>'<li class="level3">',
'after'=>'</li>',

    
         
 'echo'          => true,
          'items_wrap'        => '<ul id="%1$s" class="sub-menu-level2 %2$s">%3$s</ul>',
         
        ) );
        }
        ?>

                             
                             </li>
                            </ul>

                          </div>
                        </div>
                      </li>
                                             

<!--
                      <li class="level"><a href="shop.html" class="page-scroll">Women Cloths</a></li>
                      <li class="level"><a href="shop.html" class="page-scroll">Playsuits & Jumpsuits</a></li>
                      <!-->

                               <?php

        if (has_nav_menu('Page')) :?>
          <li class="level">



           <?php      wp_nav_menu( array(
          'theme_location'    => 'Page',




         
           'link_before'=>' <a  class="page-scroll"> ',



           'link_after'=>'</a>',
         

         

    
         
 'echo'          => true,
  //'walker' => new WP_Bootstrap_Navwalker ()
 
       
         
        ) );
        ?>
      </li>
        <?php endif;
        ?>

                      
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        
                               <?php

        if (has_nav_menu('Fashion Parent Menu')) :?>



           <?php      wp_nav_menu( array(
          'theme_location'    => 'Fashion Parent Menu',

'container'=>false,
'container_id'=>false,
'container_class'=>false,
'menu_id'=>false,
'menu_class'=>false,

         
           'link_before'=>'<a  class="page-scroll"> ',



           'link_after'=>'</a>',
         

         

    
         
 'echo'          => true,
  'walker' => new WP_Bootstrap_Navwalker ()
 
       
         
        ) );
        ?>
        <?php endif;
        ?>

                          <div class="megamenu mobile-sub-menu">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                 <li class="level2">
                                  <a href="shop.html"><span>Women Clothings</span></a>
                                      <?php
        if (has_nav_menu('Fashion Sub Menu')) {
                wp_nav_menu( array(
          'theme_location'    => 'Fashion Sub Menu',
         

          
          'before'=>'<li class="level3">',
'after'=>'</li>',

    
         
 'echo'          => true,
 
          'items_wrap'        => '<ul id=" %1$s" class="sub-menu-level2 %2$s">%3$s</ul>',
         
        ) );
        }
        ?>
                                </li>

   
                                <li class="level2">
                                  <a href="shop.html"><span>Girls Fashion</span></a>
                                <?php
        if (has_nav_menu('Fashion Sub Menu')) {
                wp_nav_menu( array(
          'theme_location'    => 'Fashion Sub Menu',
         

          
          'before'=>'<li class="level3">',
'after'=>'</li>',

    
         
 'echo'          => true,
 
          'items_wrap'        => '<ul id=" %1$s" class="sub-menu-level2 %2$s">%3$s</ul>',
         
        ) );
        }
        ?>
                                
                              </ul>
                            </div>
                          </div>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-9 p-0">
          <div class="nav_sec position-r">
            <div class="mobilemenu-title mobilemenu">
              <span>Menu</span>
              <i class="fa fa-bars pull-right"></i>
            </div>
            <!--
            <div class="mobilemenu-content">
              <ul class="nav navbar-nav" id="menu-main">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="shop.html">Shop</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="blog.html">Blog</a>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
                <!-->


                  <?php
        if (has_nav_menu('primary-menu')) {
                wp_nav_menu( array(
          'theme_location'    => 'primary-menu',

          'container'=>'div',
'container_class'=>'mobilemenu-content',

    
         
 'echo'          => true,
          'items_wrap'        => '<ul id=" menu-main %1$s" class="nav navbar-nav %2$s">%3$s</ul>',
         
        ) );
        }
        ?>
        <!--
                <li class="level">
                  <span class="opener plus"></span>
                  <a class="page-scroll">Pages</a>
                  <div class="megamenu mobile-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="account.html">Account</a></li>
                            <li class="level3"><a href="checkout.html">Checkout</a></li>
                            <li class="level3"><a href="404.html">404 Error</a></li>
                            <li class="level3"><a href="single-blog.html">Single Blog</a></li>
                            <li class="level3"><a href="product-page.html">Product Details</a></li>
                          </ul>
                        </li>
                      </ul>

                    </div>
                  </div>
                </li>
<!-->
 <div class="megamenu mobile-sub-menu">
           <?php
        if (has_nav_menu('primary-menu')) {

                wp_nav_menu( array(
          'theme_location'    => 'primary-menu',

          'container'=>'div',
'container_class'=>'megamenu-inner-top',
'menu_class'=>'sub-menu-level1',

    
         
 'echo'          => true,
          'items_wrap'        => '<ul id="  %1$s" class="sub-menu-level2 %2$s">%3$s</ul>',
         
        ) );
        }
        ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </header>
  <!-- HEADER END --> 

 
  <!-- HEADER END --> 

