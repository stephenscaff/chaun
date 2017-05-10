<?php
/**
 * Template for general posts archives.                                                                             
 *
 * @author    Stephen Scaff
 * @package   Archive/Index
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- MAIN --> 
<main role="main" class="">

<section class="mast mast--center is-fixed">
  <div class="grid">
  <header class="mast__header">
    <h1 class="mast__title"><?php single_cat_title('', true); ?></h1>
  </header>
  </div>
</section>

<!-- POSTS -->
<section class="posts bg-lightgrey">
  <div class="grid-xl">
    <div class="posts__grid">
      <?php
    if ( have_posts() ): while ( have_posts() ) : the_post();
      get_template_part( 'partials/content/content', 'post' );
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