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

<!-- Main -->
<main role="main" class="has-fixed-offset">

<!-- Mast -->
<section class="mast-img">
  <figure class="mast-img__bg js-parallax" style="background-image: url(<?php echo jumpoff_ft_img('full'); ?>);"></figure>
</section>

<?php 
// Modules
while (has_sub_field('modules')) :
  ACF_Modules::render(get_row_layout()); 
endwhile; 
?>

</main>


<!-- NEXT -->
<?php get_template_part( 'partials/partial', 'more-posts' );?>

<!-- FOOTER -->    
<?php get_footer(); ?>