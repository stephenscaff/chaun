<?php
/**
 * Template for general posts archives.                                                                                                               n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- Main -->

<main role="main" class="">

<!-- Mast -->
<section class="mast mast--center is-fixed">
  <div class="grid">
  <header class="mast__header">
    <h1 class="mast__title">Get to Work</h1>
  </header>
  </div>
</section>

<!-- Feeds -->
<section class="work-feeds">
  <div class="grid">
    <div class="work-feeds__grid">
      <?php
      $counter = 1;
    if ( have_posts() ): while ( have_posts() ) : the_post();
       include(locate_template('partials/content/content-work.php'));
       $counter++;
    endwhile; else: 
      get_template_part( 'partials/content/content', 'none' );
    endif;
    ?>
    </div>
  </div>
</section>

<!-- Pagination -->
<?php get_template_part( 'partials/posts', 'pagination' );?>

</main>

<!-- Footer  --> 
<?php get_footer(); ?>