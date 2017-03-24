<?php
/**
* The default template for single blog posts.
*
* @author    Stephen Scaff
* @package   jumpoff
* @version   1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

?>

<!-- MAIN-->
<main role="main" class="has-more-posts">

<?php while (have_posts()) : the_post(); ?>

<article>

<!-- MAST -->
<?php get_template_part( 'partials/partial', 'post-header' );?>

<?php 
// Modules
while (has_sub_field('modules')) :
  ACF_Modules::render(get_row_layout()); 
endwhile; 
?>

<!-- POST FOOTER -->
<?php get_template_part( 'partials/partial', 'post-footer' );?>

</article>

<?php endwhile; ?>

<!-- COMMENTS -->
<?php //get_template_part( 'partials/partial', 'comments' );?>

</main>

<!-- More Posts -->
<?php get_template_part( 'partials/partial', 'more-posts' );?>

<!-- FOOTER -->    
<?php get_footer(); ?>