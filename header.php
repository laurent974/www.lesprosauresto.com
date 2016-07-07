<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les pros au resto</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- [if lt IE 9]
    <script src="/public/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/public/css/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <main class="Global">
      <header class="Header slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
          <li></li><li></li><li></li>
        </ul>

        <?php $login_query = new WP_Query( 'category_name=Login' ); ?>
        <?php if ($login_query->have_posts()) : ?>
          <?php while ($login_query->have_posts()) : $login_query->the_post(); ?>
             <div class="Login">
               <?php the_content(); ?>
             </div>
           <?php endwhile; ?>
         <?php endif; ?>
         <?php wp_reset_postdata(); ?>
      </header><!-- /.Header -->

      <nav class="Navbar slide">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav><!-- /.Navbar -->
