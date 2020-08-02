<?php
if ( ! function_exists( 'my_trafficbeasts_setup' ) ) :

function my_trafficbeasts_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'my_trafficbeasts', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my_trafficbeasts' ),
        'social'  => __( 'Social Links Menu', 'my_trafficbeasts' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // my_trafficbeasts_setup

add_action( 'after_setup_theme', 'my_trafficbeasts_setup' );


if ( ! function_exists( 'my_trafficbeasts_init' ) ) :

function my_trafficbeasts_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // my_trafficbeasts_setup

add_action( 'init', 'my_trafficbeasts_init' );


if ( ! function_exists( 'my_trafficbeasts_custom_image_sizes_names' ) ) :

function my_trafficbeasts_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'my_trafficbeasts_custom_image_sizes_names' );
endif;// my_trafficbeasts_custom_image_sizes_names



if ( ! function_exists( 'my_trafficbeasts_widgets_init' ) ) :

function my_trafficbeasts_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'my_trafficbeasts_widgets_init' );
endif;// my_trafficbeasts_widgets_init



if ( ! function_exists( 'my_trafficbeasts_customize_register' ) ) :

function my_trafficbeasts_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'my_trafficbeasts_customize_register' );
endif;// my_trafficbeasts_customize_register


if ( ! function_exists( 'my_trafficbeasts_enqueue_scripts' ) ) :
    function my_trafficbeasts_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'document.write(new Date().getFullYear());');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'common' );
    wp_enqueue_style( 'common', get_template_directory_uri() . '/css/common.css', false, null, 'all');

    wp_deregister_style( 'responsive' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'form' );
    wp_enqueue_style( 'form', get_template_directory_uri() . '/css/form.css', false, null, 'all');

    wp_deregister_style( 'footer' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'my_trafficbeasts_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>