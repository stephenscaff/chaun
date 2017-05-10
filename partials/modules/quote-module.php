<?php
/**
 * Quote Module
 *
 * The module for adding Quotes
 *
 * @author       Stephen Scaff
 * @package      partials/modules
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Vars
$quote = get_sub_field('quote');
$cite = get_sub_field('cite');
$bg_color = get_sub_field('bg_color');
?>
<section class="quote">
  <div class="grid">
    <div class="quote__content <?php echo $bg_color; ?>">
      <blockquote class="quote__quote">
        <h3 class="quote__title">“<?php echo $quote; ?>”</h3>
        
        <?php if ($cite) : ?>
          <hr class="quote__sep sep-center">
          <cite class="quote__cite"><?php echo $cite; ?></cite>
        <?php endif; ?>
      </blockquote>
    </div>
  </div>
</section>