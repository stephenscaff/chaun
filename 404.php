<?php
/**
 * Template for 404                                                                                                           n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

?>

<!-- MAIN --> 
<main role="main">

<section class="fourohfour">
  <div class="grid">
    <div class="fourohfour__grid">
      <figure id="js-random-gif" class="fourohfour__figure">
    
      </figure>

      <div class="fourohfour__content js-scroll">
        <span class="fourohfour__pretitle">Four Oh Four</span>
        <h1 class="fourohfour__title"><span class="oh">Damn Sam!</span></h1>
        <h3 class="fourohfour__subtitle">You've been Four Oh Four'd Bruv. Let's Get Real Weird With It</h3>
        <a class="btn" href="<?php echo jumpoff_page_url('home') ?>">Take Me Home <i></i></a>
  
        <a class="btn js-reload no-trans" value="Reload Page" href="#">Or Get Weirder</a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- Footer  --> 
<?php get_footer(); ?>

<script type="text/javascript">

/** 
 * Suppose I should add this to the js build,
 * but, this is fine for now considering it's limited
 * use case.
 */

// Save images in array
var images = ['404-1.gif', '404-2.gif', '404-3.gif', '404-4.gif', '404-5.gif', '404-6.gif', '404-7.gif'];

// Append random gif
$('<img class="fourohfour__img" src="<?php echo jumpoff_img(); ?>/404/' + images[Math.floor(Math.random() * images.length)] + '"/>').appendTo('#js-random-gif');

// Reload function
$('.js-reload').click(function() {
    location.reload();
    $('body').addClass('is-exiting');
});
</script>