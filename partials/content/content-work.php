<?php
/**
* Content: content-folio
* Tempalte for displaying the work
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-folio
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}
$feed_title = get_field('feed_title');
$feed_img = get_field('feed_image');

?>
<article class="work-feed">
  <a class="work-feed__link" href="<?php the_permalink(); ?>">
  <span class="work-feed__meta">Fig. <?php echo $counter; ?></span>
    <figure class="work-feed__figure">
      <img class="work-feed__img" src="<?php if ($feed_img) : echo $feed_img['url']; else : echo jumpoff_ft_img('full'); endif; ?>">
    </figure>
    <header class="work-feed__header">
      <h3 class="work-feed__title">
        <?php if ($feed_title) : echo $feed_title; else : the_title(); endif; ?>
      </h3>
      <span class="work-feed__btn btn-arrow "><i></i></span>
    </header>
  </a>
</article>