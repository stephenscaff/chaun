<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Clean Menu Items
 * Class to clean up menu items, removing and reordering.
 */
class CleanMenuItems{
    
    /**
     * Constructor
     */
    function __construct(){
        add_action( 'admin_menu', array( $this, 'remove_items') );  
        add_filter('menu_order', array( $this, 'order_items') );  
        add_filter('custom_menu_order', array( $this, 'order_items') );  
    }

    /**
     * Remove Items
     * Remove menu items if not super user (me)
     */
    function remove_items(){
        global $current_user;
        // Get Super User
        $super_user = 'stephenscaff';
        if ( $current_user->user_nicename !== $super_user ) {
            //remove_menu_page( 'edit.php' );
            remove_menu_page( 'edit-comments.php' );
            remove_menu_page( 'themes.php' );
            remove_menu_page( 'plugins.php' ); 
            //remove_menu_page( 'tools.php' ); 
            remove_menu_page( 'edit.php?post_type=acf-field-group' ); 
        }
    }

    /**
     * Order Remaining Menu Items
     */
    function order_items($menu_order){
        if (!$menu_order) return true;

        return array(
            'index.php',                            // Dashboard
            'edit.php?post_type=page',              // Pages
            'edit.php',     
            'edit.php?post_type=work_cta',                        
            'edit.php?post_type=work',     
            'upload.php',                           // Media
            'users.php',                            // Users     
            'separator2',                           // Second separator
            'plugins.php',                          // Plugins
            'tools.php',                            // Tools
            'options-general.php',                  // Settings
            'themes.php',                           // Appearance
        );
    }
}

new CleanMenuItems;