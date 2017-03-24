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
add_action('init', 'create_work_post_type');

function create_work_post_type() {
  register_post_type( 'work', 

  array(
    'labels'              => array(
    'name'                => __( 'Work' ),
    'singular_name'       => __( 'Work' ),
    'add_new'             => __( 'Add New Project' ),
    'add_new_item'        => __( 'Add Another Project. Try Harder this time.' ),
    'edit'                => __( 'Edit This Sorry Project' ),
    'edit_item'           => __( 'Edit This Project, Please' ),
    'new_item'            => __( 'New Work' ),
    'view'                => __( 'View This Sorry Project' ),
    'view_item'           => __( 'View All Your Shameful Projects ' ),
    'search_items'        => __( 'Search Your Work.' ),
    'not_found'           => __( 'Sorry Buddy. That Work cannot be found. Thank God Right?' ),
    'not_found_in_trash'  => __( 'That Work is not in the Trash, but it should be.' ),
  ),

  'description'           => __( 'Chaun\'s Sorry Ass Work Jawns.' ),
  'public'                => true,
  'show_ui'               => true,
  'menu_position'         => 6,
  'menu_dashicon'         => 'dashicons-trash',
  'menu_icon'             => 'dashicons-trash',
  'query_var'             => true,  
  'supports'              => array( 'title','thumbnail' ),
  'capability_type'       => 'post',
  'can_export'            => true,
  'has_archive'           => true,
  'rewrite'               => array('slug' => 'work', 'with_front' => false),
  ));
}


/**
 *  Taonomy: Work Categories
 *
 *  Creates 'Work Categories' custom taxonomy
 *
 *  Slug : work-categories
 *  hierarchical : true
 *
 *  @version    1.0
 */

# Init Work Cats
add_action( 'init', 'create_work_cats');

function create_work_cats() {
  
  register_taxonomy(
  'work_cat', 

  // Apply our taxonomy to the following post types
  array( 'work'), 
  array(  
    'labels'             => array(
    'name'               => _x('Work Categories', 'taxonomy general name'),
    'singular_name'      => _x('Work Category', 'taxonomy singular name'),
    'search_items'       => __('Search Work Categories Punk '),
    'all_items'          => __('All Work Categories'),
    'edit_item'          => __('Edit Work Categories Loser'),
    'update_item'        => __('Update Work Category Tard'),
    'add_new_item'       => __('Add New Work Category'),
    'new_item_name'      => __('New Work Categories'),
    'menu_name'          => __('Work Categories'),
  ),
  'hierarchical'         => true,  
  'show_ui'              => true,
  'show_admin_column'    => true,
  'show_in_quick_edit'   => true,
  'rewrite'              => array(
    'slug'               => 'work-category',
    'with_front'         => false, 
    ),
  ));
}
