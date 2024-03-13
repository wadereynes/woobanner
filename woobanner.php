<?php
/*
Plugin Name: Woo Banner
Plugin URI: https://wadereynes.com
Description: Adds banner for page.
Version: 1.0
Author: Wade Reynes
Author URI: https://wadereynes.com
Text domain: woocommerce


*/

// Error if someone opens this directly and security purposes

defined('ABSPATH') or die("Go away");

define('WOOBANNER_PATH', plugin_dir_url(__FILE__) );


// Load scripts and styles
function wooslider_scripts() {

    wp_enqueue_style('woobanner-custom', WOOBANNER_PATH . 'css/style.css');


}
add_action('wp_enqueue_scripts', 'wooslider_scripts');


// Shortcode for banner
function woobanner_shortcode() {
    global $post;

    if( has_post_thumbnail( $post->post_parent ) ) { 
        echo get_the_post_thumbnail( $post->post_parent );
      }
}
add_shortcode('woobanner', 'woobanner_shortcode');

