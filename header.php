<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les pros au resto</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favico/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favico/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favico/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favico/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="lesprosauresto">
    <meta name="application-name" content="lesprosauresto">
    <meta name="theme-color" content="#ffffff">

    <!-- [if lt IE 9]
    <script src="/public/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/public/css/main.css" media="screen" title="no title" charset="utf-8">

    <?php wp_head(); ?>
  </head>
  <body>
    <main class="Global">
      <header class="Header slide">
        <div class="Logo">
          <span class="Logo-Image"></span>
          <span class="Logo-Slogan">Les Pros au resto</span>
        </div>

        <ul id="navToggle" class="burger slide">
          <li></li><li></li><li></li>
        </ul>

        <button class="only-on-mobiles Login-MobileButton js-toggleLoginBlock">
          <i class="material-icons">&#xE7FD;</i>
          <i class="material-icons hide">&#xE7FF;</i>
        </button>

        <?php $login_query = new WP_Query( 'category_name=Login' ); ?>
        <?php if ($login_query->have_posts()) : ?>
          <?php while ($login_query->have_posts()) : $login_query->the_post(); ?>
             <div class="Login js-loginForm">
               <?php the_content(); ?>
             </div>
           <?php endwhile; ?>
         <?php endif; ?>
         <?php wp_reset_postdata(); ?>
      </header><!-- /.Header -->

      <nav class="Navbar slide">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav><!-- /.Navbar -->
