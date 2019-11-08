<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

 <a href="#maincontent" class="skiplink">Go to Main Content</a>
 
<header class="main-header">

  <section class="main-nav">

    <div class="wrapper flex">

      <input type="checkbox" id="nav-toggle" class="main-nav__checkbox">

      <label for="nav-toggle" class="main-nav__label">

        <span class="menu-button">
          <span></span>
          <span></span>
          <span></span>
          <span class="visually-hidden">Menu</span>
        </span>

      </label>
      <!-- <button class="menu-button">
        <span></span>
        <span></span>
        <span></span>
        <span class="visually-hidden">Menu</span>
      </button> -->

      <?php wp_nav_menu( array(
        'theme_location' => 'primary',
        'container_class' => 'menu',
        'container' => 'nav'
      )); ?>
      
    </div>

  </section> 

</header>

<main id="maincontent">
