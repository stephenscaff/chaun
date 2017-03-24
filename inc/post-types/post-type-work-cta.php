<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Post Type: Work
 *
 *  Slug :      work
 *  Supports : 'title','thumbnail', 'excerpt', 'editor'
 *
 *  @version    1.0
 *  @author     stephen scaff
 *  @see        single.php
 *  @see        archive.php
 */

# Init Work
add_action('init', 'create_work_cta_post_type');

function create_work_cta_post_type() {
  register_post_type( 'work_cta', 

  array(
    'labels'              => array(
    'name'                => __( 'Work CTAs' ),
    'singular_name'       => __( 'Work CTA' ),
    'add_new'             => __( 'Add Work CTA' ),
    'add_new_item'        => __( 'Add Another Work CTA. Try Harder this time.' ),
    'edit'                => __( 'Edit Work CTA' ),
    'edit_item'           => __( 'Edit This Work CTA' ),
    'new_item'            => __( 'New Work CTA' ),
    'view'                => __( 'View Work CTA' ),
    'view_item'           => __( 'View All Your Shameful Projects ' ),
    'search_items'        => __( 'Search Your Work CTAs.' ),
    'not_found'           => __( 'Sorry Buddy. That Work CTA cannot be found. Thank God Right?' ),
    'not_found_in_trash'  => __( 'That Work CTA is not in the Trash, but it should be.' ),
  ),

  'description'           => __( 'A builder to display Chaun\'s Work Jawns on the home page.' ),
  'public'                => false,
  'show_ui'               => true,
  'menu_position'         => 6,
  'menu_dashicon'         => 'dashicons-testimonial',
  'menu_icon'             => 'dashicons-testimonial',
  'query_var'             => true,  
  'supports'              => array( 'title','thumbnail', 'excerpt' ),
  'capability_type'       => 'post',
  'can_export'            => true,
  'has_archive'           => false,
  'hierarchical'          => false,
  'rewrite'               => array('with_front' => false),
  ));
}



