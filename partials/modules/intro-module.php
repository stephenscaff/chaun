<?php
/**
* intro-module
*
* The module for creating Intro Sections
*
* @author       Stephen Scaff
* @package      partials/modules
* @see          kit/scss/components/_intros.scss
* @version      1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//vars 
$title = get_sub_field('intro_title'); 
$subtitle = get_sub_field('intro_subtitle'); 
$text = get_sub_field('intro_text');
?>

<!-- Intro -->


<section class="intro">
  <div class="grid">
    <header  class="intro__header">
      <h1 class="intro__title"><?php echo $title; ?></h1>      
      <span class="sep-dotted"></span>
      <?php if ($subtitle) : ?><h4 class="intro__subtitle"><?php echo $subtitle; ?></h4><?php endif; ?>
    </header>

    <section class="intro__content intro__cols">
      <div class="intro__copy">
        <?php echo $text; ?>
      </div>
      <div class="intro__cats">
        <?php echo jumpoff_post_terms('work_cat', 'span'); ?>

      </div>
    </section>
  </div>
</section>