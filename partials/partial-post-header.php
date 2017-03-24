<?php
/**
 * Post Header
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Jumpoff
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$subtitle = get_field('subtitle');

?>


<section class="mast-img mast-img--post">
  <figure class="mast-img__bg js-parallax" style="background-image: url(<?php echo jumpoff_ft_img('full'); ?>);"></figure>
</section>

<section class="intro intro--post">
  <div class="grid">
    <header class="intro__header">
      <h1 class="intro__title"><?php the_title(); ?></h1>
      
      <span class="sep-dotted"></span>
      <?php if ($subtitle) : ?><h4 class="intro__subtitle"><?php echo $subtitle; ?></h4><?php endif; ?>
    </header>
  </div>
</section>