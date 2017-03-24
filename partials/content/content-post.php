<?php
/**
* Content: content-Posts
*
* @author    Stephen Scaff
* @package   jumpoff/content/content-posts
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<article class="post">
  <a class="post__link" href="<?php the_permalink(); ?>">
  <figure class="post__figure has-preloader ">
    <img class="post__img js-lazy" data-src="<?php jumpoff_ft_img('large'); ?>">
    <span class="preloader"></span>
  </figure>
  <div class="post__content">
    <span class="post__meta" data-sim-link="<?php echo jumpoff_post_cat('url'); ?>"><?php echo jumpoff_post_cat('name'); ?></span>
    <h4 class="post__title"><?php the_title(); ?></h4>
    <span class="post__btn btn btn--beta "><span>Read Entry</span> <i></i></span>
  </div>
  </a>
</article>