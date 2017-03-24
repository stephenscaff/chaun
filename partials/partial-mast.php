<?php
/**
 *  Partial: Mast
 *
 *  Template for displaying our simple mast elements
 *
 *  @author    Stephen Scaff
 *  @package   jumpoff/partials
 *  @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//vars
$id = jumpoff_ids();
$mast_title = get_field('mast_title', $id);

$mast_class;

# Home
if (is_page('home')){
  $mast_class = 'mast--left';
}

# If Work Post Type
if (is_post_type('work')){
  $mast_class = 'mast--centerd is-fixed';
} 

?>

<section class="mast <?php echo $mast_class; ?>">
  <div class="grid">
  <header class="mast__header">
    <h1 class="mast__title"><?php echo $mast_title; ?></h1>
  </header>

  <?php if (is_page('home')) : ?>
    <span class="mast__help btn-down"><i></i></span>
  <?php endif; ?>
  </div>
</section>