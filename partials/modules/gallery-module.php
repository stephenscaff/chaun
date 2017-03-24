<?php
/**
 * Gallery Module
 *
 * The module for adding gallery like images.
 *
 * @author       Stephen Scaff
 * @package      SandP
 * @see          kit/scss/components/_auto-grid.scss
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Vars
$gallery = 'gallery';
$has_bg_color = get_sub_field('has_bg_color');
$bg_color = get_sub_field('bg_color');
$box_shadow = get_sub_field('has_boxshadow');
$width = get_sub_field('width');
$pad = get_sub_field('padding');
?>

<section class="gal <?php if ($pad) : echo $pad; endif; ?>">
  <div class="<?php echo $width; ?>">
    <div class="gal__grid">
      <?php  
      while( have_rows($gallery) ): the_row(); 
        $img = get_sub_field('image');
        $size = get_sub_field('size'); ?>
        <figure class="gal__item <?php echo $size;  if ($box_shadow) : echo ' has-shadow'; endif;?>">
          <?php if ($has_bg_color) : ?>
          <span class="has-bg" style="background-color: <?php echo $bg_color; ?>">
          <?php endif; ?>
          <img class="gal__img"  src="<?php echo $img['url']; ?>">
          <?php if ($has_bg_color) : ?>
          </span>
          <?php endif; ?>
        </figure>
      <?php endwhile; ?>
    </div>
  </div>
</section>