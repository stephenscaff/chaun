<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Flush Rewrites
 */
add_action( 'after_switch_theme', 'jumpoff_flush_rewrite_rules' );

// Flush your rewrite rules
function jumpoff_flush_rewrite_rules() {
  flush_rewrite_rules();
}

# Post Functions
require_once('post-taxonomy.php');

# Work
require_once('post-type-work.php');

# Work
require_once('post-type-work-cta.php');