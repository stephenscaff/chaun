<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/**
 * Admin Appearance
 * Class to improve and clean up WP's admin. 
 */
class AdminAppearance{
  
  function __construct(){
    add_filter( 'admin_body_class', array( $this, 'admin_body_class' ) );
    add_action('wp_before_admin_bar_render', array( $this, 'admin_bar'));
    add_filter( 'admin_footer_text', array( $this, 'admin_footer') );

    $this->admin_removes();
  }

  function admin_body_class(){

    global $post;

    if( !is_object($post) ) {
      return;
    }

    setup_postdata( $post );

    // Returns an object that includes the screen’s ID, base, post type, taxonomy
    // @see https://developer.wordpress.org/reference/functions/get_current_screen
    $screen = get_current_screen();

    // Construct class from post id
    $post_id = 'admin-post-'.$post->ID;

    // Page Name
    $page_name = 'admin-'.$post->post_name;
    $classes;
    $classes = ' ' . $screen->post_type . ' ' . $post_id . ' ' . $page_name . '';

    // Had issues returning page template name, so...
    if(basename(get_page_template()) === 'page.php'){
      $classes .= ' admin-page-template-default';
    }

    return $classes;
    wp_reset_postdata( $post );
  }

  /**
   * Admin Bar Cleanup
   */
  function admin_bar(){
    global $wp_admin_bar;

    // Remove Menu Items
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
  }

  /**
   * Admin Footer Message
   */
  function admin_footer(){
      _e( '<span id="footer-thankyou">Developed by <a href="http://stephenscaff.com" target="_blank">S Money Scaff</a></span>' );
  }

  /**
   * Admin Removes
   * Clean up any dingle berries
   */
  function admin_removes(){
    add_filter('show_admin_bar', '__return_false'); 
    remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
    remove_action( 'additional_capabilities_display', 'additional_capabilities_display' );
  }
}

new AdminAppearance;