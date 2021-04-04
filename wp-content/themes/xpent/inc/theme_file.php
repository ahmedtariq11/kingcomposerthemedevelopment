<?php
function xpent_scripts(){
    //Theme css files
    wp_enqueue_style('font-awesome', THEME_URI.'/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap-css', THEME_URI.'/css/bootstrap.css');
    wp_enqueue_style('jquery-ui', THEME_URI.'/css/jquery-ui.css');
    wp_enqueue_style('owl-carousel', THEME_URI.'/css/owl.carousel.css');
    wp_enqueue_style('a-magnific', THEME_URI.'/css/magnific-popup.css');
    wp_enqueue_style('fotorama', THEME_URI.'/css/fotorama.css');
    wp_enqueue_style('custom', THEME_URI.'/css/custom.css');
    wp_enqueue_style('responsive', THEME_URI.'/css/responsive.css');
    
    //Theme js files

wp_deregister_script('jquery');
    wp_enqueue_script('bootstrap-js', THEME_URI.'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery-ui-js', THEME_URI.'/js/jquery-ui.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fotorama', THEME_URI.'/js/fotorama.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('magnific', THEME_URI.'/js/jquery.magnific-popup.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', THEME_URI.'/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
 wp_enqueue_script('maganify-carousel', THEME_URI.'/js/maganify.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom', THEME_URI.'/js/custom.js', array('jquery'), '1.0.0', true);
    
    
}