<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les pros au resto</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- [if lt IE 9]
    <script src="/public/js/html5shiv.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/public/css/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <main class="Global">
      <header class="Header slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
          <li></li><li></li><li></li>
        </ul>
      </header><!-- /.Header -->

      <nav class="Navbar slide">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav><!-- /.Navbar -->

      <div class="Content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <div class="bloc">

        </div>
      </div><!-- /.Content -->
    </main><!-- /.Global -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/public/js/all.js"></script>
  </body>
</html>
