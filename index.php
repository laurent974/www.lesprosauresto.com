<?php get_header(); ?>
<div class="Content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
  <?php query_posts('category_name=Accueil'); ?>
</div><!-- /.Content -->
<?php get_footer(); ?>
