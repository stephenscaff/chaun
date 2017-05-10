<?php
/**
 * The template for displaying Comments
 * Use Disqus if we turn on
 *
 * @author    Stephen Scaff
 * @package   comments
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}
// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>
