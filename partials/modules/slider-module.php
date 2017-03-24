<?php
/**
 * Slider Module
 *
 * The module for adding a simple image slider.
 *
 * @author       Stephen Scaff
 * @package      SandP
 * @see          kit/scss/components/_auto-grid.scss
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Vars
$slider = 'slider';
$pad = get_sub_field('padding');
?>

<section class="slider <?php if ($pad) : echo $pad; endif; ?>">
  <div class="grid">
    <div class="slider__content js-slider">
    <?php  
    while( have_rows($slider) ): the_row();  
    $img = get_sub_field('image'); ?>
      <figure class="slider__item">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
      </figure>
    <?php endwhile; ?>
    </div>
    <footer class="slider__footer">
      <span class="slider__count">Fig <span class="js-slider-current">1</span> of <span class="js-slider-items">0</span></span>
    </footer>
  </div>
</section>
