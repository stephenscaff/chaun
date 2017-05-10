<?php
/**
 *  Partial: More Posts
 *  The More Posts section that appears at the bottom of
 *  single post/cpt instances, providing additional post previews.
 *
 *  @author     Stephen Scaff
 *  @package    partials
 *  @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

// Get id of current post
$current_post = get_the_ID();

// Content type logic
$post_type = '';

if (is_post_type('work')){
  $post_type = 'work';
} else {
  $post_type = 'post';
}

?>

<section class="more-posts bg-beta">
  <div class="grid">
    <header class="more-posts__header">
      <h3 class="more-posts__title">Keep it moving</h3>
    </header>
    <div class="more-posts__grid">
<?php 
$args = array(
  'post_type'        => $post_type,
  'posts_per_page'   => 4,
  'post__not_in'     => array ($current_post),
  'order'            => 'DESC',
);
$more_posts = get_posts($args);
  if ($more_posts) : 
    foreach ( $more_posts as $post ) : setup_postdata( $post );
      get_template_part( 'partials/content/content', 'post-min' ); 
    endforeach; 
  endif;
wp_reset_postdata(); ?>
    </div>
  </div>
</section>
