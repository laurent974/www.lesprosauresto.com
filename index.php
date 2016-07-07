<?php get_header(); ?>
<div class="Banner">
  <img src="<?php bloginfo('template_directory'); ?>/public/images/banner.jpg" alt="Bienvenue sur les pros au resto !" />
</div>
<section class="Part slide">
  <?php query_posts('category_name=Accueil'); ?>
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <article class="Post twelve columns">
          <h1 class="Post-Title Title-H1"><?php the_title(); ?></h1>
          <p class="Post-Content">
            <?php the_content(); ?>
          </p><!-- /.Post-Content -->
        </article><!-- /.Post -->
      <?php endwhile; ?>
    </div><!-- /.row -->
  <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
