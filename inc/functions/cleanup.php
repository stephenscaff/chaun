<?php

if ( ! defined( 'ABSPATH' ) ) exit; 

/**
 * WPCleanUp
 * Some methods to clean up various grimey wp stuff.
 */
class WPCleanUp{
  
  function __construct(){
    add_action('init', array( $this, 'clean_head' ));
    add_filter( 'style_loader_src', array( $this, 'no_versioning') );
    add_filter( 'script_loader_src', array( $this, 'no_versioning') );
  }

  function clean_head(){
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');  
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

  }

  function no_versioning($src){
    if ( strpos( $src, 'ver=' ) ) {
      $src = remove_query_arg( 'ver', $src );
    }
    return $src;
  }
}

new WPCleanUp;


