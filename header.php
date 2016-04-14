<!DOCTYPE <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset= <?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
      <hr>
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
    </header>