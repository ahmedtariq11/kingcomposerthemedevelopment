<?php
/*
Template Name: Template Fluid
 */
 get_header();?>

<?php while(have_posts() ) : the_post();?>
    <div class="body-content">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="blog-page">
                    <div class="col-md-12">
                        <?php get_template_part("template-parts/content/content","page-ceontent");?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endwhile;?>
 <?php get_footer();?>