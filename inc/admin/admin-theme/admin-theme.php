<?php
/**
 *  Admin Styles
 *  Loads styles for custom admin theme and login page
 */

add_action('admin_enqueue_scripts', 'jumpoff_admin_theme_styles');
add_action('login_enqueue_scripts', 'jumpoff_admin_theme_styles');

function jumpoff_admin_theme_styles() {
  wp_enqueue_style('admin',get_template_directory_uri() . '/inc/admin/admin-theme/assets/css/admin.css', false );
}
