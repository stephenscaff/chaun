<?php
/**
 * Section: Pagination
 *
 * Calls pagination funciton
 *  
 *
 * @author    Stephen Scaff
 * @package   pocketprep/partials/sect-pagination
 * @version   1.0
 * @see       inc/functions/pagination.php
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