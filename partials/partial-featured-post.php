<?php
/**
 * Partial: Featured Post
 *
 * A partial that inlcudes Featured Posts
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// If not on pagination page
if ( !is_paged() ) : 

$args = array(
  'posts_per_page'  => 1,
  'tax_query'       => array(
    array(
      'taxonomy'    => 'post-functions',
      'field'       => 'slug',
      'terms'       => array( 'featured' ),
      'operator'    => 'IN',
    ),
  ));

$featured = get_posts( $args );

if ($featured) : 

?>

<section class="ftd-post">
  <div class="grid-lg">
    <?php foreach ( $featured as $post ) : setup_postdata( $post ); ?>
    
    <a class="ftd-post__link" href="<?php the_permalink(); ?>">
      <figure class="ftd-post__figure">
        <img class="ftd-post__img" src="<?php echo jumpoff_ft_img('full'); ?>">
      </figure>

      <header class="ftd-post__header">
        <span class="ftd-post__meta">Featured</span>
        <h1 class="ftd-post__title"><?php the_title(); ?></h1>
        <span class="sep-dotted"></span>
        <p class="ftd-post__text"><?php echo jumpoff_excerpt('125'); ?></p>
        <span class="ftd-post__btn btn">Read Entry</span>
      </header>
    </a> 
    <?php endforeach; 
  endif;
  wp_reset_postdata();
?>
  </div>
</section>
<?php endif; ?>

