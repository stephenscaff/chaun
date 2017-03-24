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
$work_cta_title = get_field('work_cta_title');
$work_cta_link = get_field('work_cta_link');
$work_cta_img = get_field('work_cta_image');

?>

<article class="work-cta  js-scroll">
  <a class="work-cta__link" href="<?php echo $work_cta_link; ?>">
    <header class="work-cta__header">
      <span class="work-cta__meta">Fig. <?php echo $counter; ?></span>
      <h3 class="work-cta__title js-words"><?php echo $work_cta_title; ?></h3>
      <hr class="work-cta__sep"/>
      <span class="work-cta__btn btn "><span>See This Project</span> <i></i></span>
    </header>

    <figure class="work-cta__figure has-reveal">
      <img class="work-cta__img" src="<?php echo $work_cta_img['url'] ?>" alt="<?php echo $work_cta_img['alt'] ?>">
    </figure>
  </a>
</article>