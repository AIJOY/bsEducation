<!-- Enqueue the style of bs Education -->
<?php
/**
 * Theme Functions.
 * 
 * @package Bs-Education
 */
function bsEducation_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bsEducation-bootstrapCDN', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(),  'all');
    wp_enqueue_style('bsEducation-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('bsEducation-style-rtl', get_template_directory_uri() . "/style-rtl.css", array(), $version, 'all');
    wp_enqueue_style('bsEducation-flexSlider_style', get_template_directory_uri() . "/assets/css/flexslider.css", array(), '2.2.0', 'all');
    wp_enqueue_style('bsEducation-font_style', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), 'all');
    wp_enqueue_style('bsEducation-fontAwesome', "https://pro.fontawesome.com/releases/v5.10.0/css/all.css", array(), 'all');
}

add_action('wp_enqueue_scripts', "bsEducation_register_styles");

// wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css',false,'1.1','all');

function bsEducation_register_scripts(){
  wp_enqueue_script('bsEducationJqueryCDN', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
  wp_enqueue_script('bsEducationBootsJqueryCDN', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true);  
  wp_enqueue_script('bsEducationCustomJs', get_template_directory_uri() . "/assets/js/custom.js", array('jquery'),'1.0',true);
  wp_enqueue_script('bsEducation-jquery', get_template_directory_uri() . "/assets/js/jquery-1.10.2.js", '1.10.2', true);
  wp_enqueue_script('bsEducationBootstrap', get_template_directory_uri() . "/assets/js/bootstrap.js", array(), '3.2.0', true);
  wp_enqueue_script('bsEducation-jqueryEasingMinJs', get_template_directory_uri() . "/assets/js/jquery.easing.min.js", array(), '1.3', true);
  wp_enqueue_script('bsEducation-jqueryFlexSliderJs', get_template_directory_uri() . "/assets/js/jquery.flexslider.js", array(), '2.2.2', true);
  wp_enqueue_script('bsEducation-scrollReveal.js', get_template_directory_uri() . "/assets/js/scrollReveal.js", array('jquery'), '2.2.2', true);
  
}
// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
add_action('wp_enqueue_scripts', "bsEducation_register_scripts");

function register_menus(){
  register_nav_menus([
    'bs-header-menu' => esc_html__('Header Menu', 'bs'),
    'bs-footer-menu' => esc_html__('footer Menu', 'bs'),
  ]);
}
add_action('register_nav_menus', 'register_menus');
?>