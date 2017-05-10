<?php
/**
 * Partial: Work CTAs
 *
 * A partial that inlcudes Work CTAs
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partialas
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$args = array(
  'post_type'       => 'work_cta',
  'posts_per_page'  => 3,
  'orderby'         => 'date',
  'order'           => 'DESC',
);

$work_ctas = get_posts( $args );
$counter = 1;

?>

<section class="work-ctas">
  <div class="grid">
<?php
  foreach ( $work_ctas as $post ) : setup_postdata( $post );
    include(locate_template('partials/content/content-work-cta.php'));
    $counter++;
  endforeach; 
  wp_reset_postdata();
?>
  </div>
</section>

<!-- View All -->
<section class="view-all">
	<div class="grid">
		<div class="view-all__content">
			<a class="view-all__btn btn-header" href="<?php echo jumpoff_page_url('work', 1) ?>">More Work</a>
		</div>
	</div>
</section>
