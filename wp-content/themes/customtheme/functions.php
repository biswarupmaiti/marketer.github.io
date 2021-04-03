<?php   

/**
 * Proper way to enqueue scripts and styles
 */
function add_theme_scripts() {
   //style
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', '', '1.0', 'all');
    wp_enqueue_style( 'style.cs', get_template_directory_uri() . '/css/style.css', '','1.0');
    wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/css/animate.css', '','1.0');
    wp_enqueue_style( 'style-magnific-popup.css', get_template_directory_uri() . '/css/style-magnific-popup.css', '','1.0');
    wp_enqueue_style( 'fonts.css', get_template_directory_uri() . '/css/fonts.css', '','1.0');
    wp_enqueue_style( 'images/favicon.ico', get_template_directory_uri() . '/images/favicon.ico', '','1.0');
    wp_enqueue_style( 'navigation.css', get_template_directory_uri() . '/revolution/css/navigation.css', '','1.0');
    wp_enqueue_style( 'layers.css', get_template_directory_uri() . '/revolution/css/layers.css', '','1.0');
    wp_enqueue_style( 'settings.css', get_template_directory_uri() . '/revolution/css/settings.css', '','1.0');
    wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri() . '/revolution/fonts/font-awesome/css/font-awesome.min.css', '','1.0');
    wp_enqueue_style( 'pe-icon-7-stroke.css', get_template_directory_uri() . '/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css', '','1.0');

   //scripts
   wp_enqueue_script( 'jquery-1.11.3.min.js', get_template_directory_uri().'/js/jquery-1.11.3.min.js','','1.0');
   wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/js/bootstrap.min.js','','1.0');
   wp_enqueue_script( 'jquery.scrollTo-min.js', get_template_directory_uri().'/js/jquery.scrollTo-min.js','','1.0');
   wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri().'/js/jquery.magnific-popup.min.js','','1.0');
   wp_enqueue_script( 'plugins.js', get_template_directory_uri().'/js/plugins.js','','1.0');
   wp_enqueue_script( 'custom.js', get_template_directory_uri().'/js/custom.js','','1.0');
   wp_enqueue_script( 'jquery.themepunch.tools.min.js', get_template_directory_uri().'/revolution/js/jquery.themepunch.tools.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.actions.min.j', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.actions.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.carousel.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.carousel.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.kenburn.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.kenburn.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.layeranimation.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.layeranimation.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.migration.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.migration.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.navigation.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.navigation.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.parallax.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.parallax.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.slideanims.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.slideanims.min.js','','1.0');
   wp_enqueue_script( 'revolution.extension.video.min.js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.video.min.js','','1.0');
   wp_enqueue_script( 'revolution.addon.whiteboard.min.js', get_template_directory_uri().'/revolution-addons/whiteboard/js/revolution.addon.whiteboard.min.js','','1.0');


       }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Custom Menu section
function owt_theme_menus(){

    register_nav_menus( array(
        
        'primary-menu'=>'Header Menu',
        'footer-menu'=>'Footer Menu') );
}
add_action('init', 'owt_theme_menus');

//register_nav_menus( array('primary-menu'=>'Header Menu') );


add_theme_support( 'custom-header');

?>