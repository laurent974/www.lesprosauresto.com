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
        <ul>
          <li><a href="../trunk.html" class="active">HOME</a></li>
          <li><a href="#">LINK TWO</a></li>
          <li><a href="#">LINK THREE</a></li>
          <li><a href="#">LINK FOUR</a></li>
          <li><a href="#">LINK FIVE</a></li>
          <li><a href="#">LINK SIX</a></li>
          <li><a href="#">LINK SEVEN</a></li>

          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </ul>
      </nav><!-- /.Navbar -->

      <div class="Content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <div class="bloc">

        </div>
      </div><!-- /.Content -->
    </main><!-- /.Global -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/public/js/all.js"></script>
  </body>
</html>
