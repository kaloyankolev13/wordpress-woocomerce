<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;

add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
function remove_storefront_header_searchfield()
{
    remove_action('storefront_header', 'storefront_product_search', 40);
}
add_action('init', 'remove_storefront_header_searchfield');

function load_page_css()
{
    global $post;
    wp_enqueue_style("page-css", get_stylesheet_directory_uri() . "/css/" . $post->post_name . ".css");
}
add_action("wp_enqueue_scripts", "load_page_css");




