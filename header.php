<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="inc/css/style.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <?php wp_head();?>
    <title>Bienvenidos a iformal</title>
</head>
<body <?php body_class()?>>

<div class="cabecera">
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">Inici</a>

  <button class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#navbarNav" 
          aria-controls="navbarNav" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <?php
    wp_nav_menu( array(
      'theme_location'  => 'iformal_main_menu',
      'depth'           => 3,
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id'    => 'navbarNav',
      'menu_class'      => 'navbar-nav mr-auto',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
    ?>
    </nav>

</div>