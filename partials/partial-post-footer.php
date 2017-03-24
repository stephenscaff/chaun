<?php
/**
 * Post Footer
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Jumpoff
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<footer class="post-footer">
  <div class="grid-sm">
    <!-- Post Cats -->
    <aside class="post-cats">
      <span class="post-cats__title">Posted In : </span>
      <span class="post-cats__item"><?php the_category('</span><span class="post-cats__item">'); ?></span>
    </aside>

    <!-- Post Shares -->
    <aside class="post-shares">
      <span class="post-shares__title">Share</span>
      <a class="post-shares__link" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>+<?php the_permalink(); ?>">Twitter</a>
      <a class="post-shares__link" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>/&amp;title=<?php the_title(); ?>">Facebook</a>
    </aside>
  </div>
</footer>