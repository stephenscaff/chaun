<?php
/**
 * Template for iconv(in_charset, out_charset, str)                                                                                                                       n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- Main --> 
<main role="main" class="">

<!-- Featured Post -->
<?php get_template_part( 'partials/partial-featured', 'post' );?>

<!-- Posts -->
<section class="posts">
 <div class="grid-lg">
  <div id="js-posts" class="posts__grid">
  <?php 

$ppp = intval(get_option('posts_per_page')); 

add_filter('post_limits', 'jumpoff_limit_posts');

$args = array(
  'posts_per_page'   => $ppp,
  'offset'           => 1,
  'paged'            => $paged,
  'order'            => 'DESC',
  'tax_query' => array(
   array(
     'taxonomy' => 'post-functions',
     'field' => 'slug',
     'terms' => array( 'featured' ),
     'operator' => 'NOT IN',
   ),
  )
);
$wp_query = new WP_Query($args);
if (have_posts()) :  while ( $wp_query->have_posts() ) : $wp_query->the_post();
  get_template_part( 'partials/content/content', 'post' );
endwhile; endif;
wp_reset_postdata();

remove_filter('post_limits', 'jumpoff_limit_posts');?>
  </div>
 </div>
</section>

<?php get_template_part( 'partials/partial', 'load-more' );?>

<?php get_template_part( 'partials/partial', 'insta' );?>

</main>

<!-- Footer--> 
<?php get_footer(); ?>

