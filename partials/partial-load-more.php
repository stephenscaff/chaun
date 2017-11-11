<?php
/**
 * Partial: Load More
 *
 * Calls section that includes an ajax load more btn.
 *  
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 * @see       inc/load-more
 * @see       scss/components/_load-more.scss
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<section class="load-more">
  <div class="grid">
    <a id="js-load-more" class="load-more__link" href="#">
      <span class="btn">Keep Reading</span>
      <span class="load-more__preloader"><span class="preloader preloader--load-more"></span></span>
    </a>
  </div>
</section>