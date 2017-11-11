<?php
/**
 * Template Name: About
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

$about_img = get_field('about_image');
$about_pretitle = get_field('about_pretitle');
$about_title = get_field('about_title');
$about_content = get_field('about_content');
$contacts = 'about_contacts';
$socials = 'about_socials';
?>

<!-- MAIN --> 
<main role="main">

<section class="about-cols">
  <div class="grid-lg">
    <div class="about-cols__grid">
  <figure class="about-cols__figure is-fixed" style="background-image: url(<?php echo $about_img['url']; ?>)">
  
  </figure>

  <section class="about-cols__content">
  <header class="about-cols__header">
    <span class="about-cols__pretitle"><?php echo $about_pretitle; ?></span>
    <h1 class="about-cols__title"><?php echo $about_title; ?></h1>
    <hr class="sep-full"/>
  </header>

  <div class="about-cols__copy">
    <?php echo $about_content; ?>

    <!-- Contacts -->
    <section class="about-cols__contacts">
      <!-- Contact Block -->
      <div class="about-cols__contact">

        <?php 
        while( have_rows($contacts) ): the_row(); 
          $title = get_sub_field('title');
          $value = get_sub_field('value');
        ?>
        <h4 class="about-cols__subtitle"><?php echo $title; ?></h4>
        <?php echo $value; ?>
        <br/>
        <?php endwhile; ?>
      </div>
      <!-- Contact Block: Socials -->
      <div class="about-cols__contact">
      <?php while( have_rows($socials) ): the_row(); 
        $account = get_sub_field('account');
        $link = get_sub_field('link');
      ?>
        <a href="<?php echo $link; ?>"><?php echo $account; ?></a>
      <?php endwhile; ?>
    </div>
  </section>

  </div>
    </section>  
    </div>
  </div>
  </section>
</main>

<!-- FOOTER --> 
<?php get_footer(); ?>