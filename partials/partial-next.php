<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly
/**
 *  Section: Next Post
 *
 *  @author     Stephen Scaff
 *  @package    partials
 *  @version    1.0
 *  @uses       cptNav::$loop_navigation_find to find first/last posts
 *  @uses       jumpoff_prev_link() which calls our cptNav class
 *  
 *              $format='%link &raquo;', 
 *              $link='%title', 
 *              $in_same_term = false, 
 *              $excluded_terms = '', 
 *              $taxonomy = 'category'
 */

$current_post = $post->ID;
$post_type = 'work';
?>
<section class="more-posts">
  <div class="grid-lg">
    <div class="next__grid">
<?php 
$args = array(
  'post_type'        => 'work',
  'posts_per_page'   => 4,
  //'posts__not-in'    => $current_post,
  'order'            => 'DESC',
  'tax_query' => array()
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
