<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Open+Sans:400,400i,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

 <a href="#maincontent" class="skiplink">Go to Main Content</a>
 
<header>

  <div class="site-banner wrapper">

    <!-- Site logo -->
    <a href="<?php echo get_home_url(); ?>" class="site-logo">
      <span class="site-logo__block">Russell </span>
      <span class="site-logo__block">Bentulan</span>
    </a>

    <p class="tagline">Front end developer, human being.</p>
    
  </div>

  <section class="main-nav">
    <div class="wrapper flex">

        <?php 
        // strip out wp nav div and add a nav with the role 'navigation'
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container' => 'nav',
          'container_class' => 'main-nav__nav',
          'menu_class' => 'main-nav__list'
        )); 
        ?>

    </div>
    <!-- .wrapper .flex -->
  </section> 
  <!-- .main-nav -->
</header>

<main id="maincontent">
