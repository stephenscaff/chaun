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
      <span class="preloader preloader--alpha"></span>
    </figure>
    <div class="post__content">
      <h5 class="post__title"><?php the_title(); ?> <i></i></h5>
    </div>
  </a>
</article>