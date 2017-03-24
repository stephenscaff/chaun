<?php
# Users
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Users - Remove and add fields to User page
 */
function jumpoff_contact_information($contactmethods) {
  // Removing Fields
  unset($contactmethods['aim']);
  unset($contactmethods['yim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['website']);

  return $contactmethods;

}
add_filter('user_contactmethods', 'jumpoff_contact_information');
