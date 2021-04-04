<?php get_header();?>
    <div class="body-content">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-9">
                        <h1>Hello I am in Woocmmerce.php</h1>
                        <?php woocommerce_content();?>
                    </div>
                    
                <?php get_template_part("template-parts/sidebar/right-sidebar","sidebar-right");?>
                </div>
            </div>
        </div>
    </div>
 <?php get_footer();?>