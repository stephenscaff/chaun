<?php
/**
 * Partial: header
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<body <?php body_class(); ?>>

<!-- Header-->
<header class="site-header">
  <div class="site-header__wrap">
    <!-- Logo -->
    <a href="/" class="site-header__logo">
      <span class="logo-c"></span>
      <span class="logo-o"></span>
    </a>


    <!-- Main Nav-->
    <nav role="navigation" class="site-header__nav">
      <ul>
        <li><a href="<?php echo jumpoff_page_url('work', 1) ?>">Work</a></li>
        <li><a href="<?php echo jumpoff_page_url('about') ?>">About</a></li>
        <li><a href="<?php echo jumpoff_page_url('journal') ?>">Journal</a></li>
      </ul>  
    </nav>
  </div>
</header>
