<?php get_header(); ?>
<section class="Part slide row">
  <?php query_posts('category_name=Accueil'); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="Post twelve columns">
        <h1 class="Post-Title Title-H1"><?php the_title(); ?></h1>
        <p class="Post-Content">
          <?php the_content(); ?>
        </p><!-- /.Post-Content -->
      </article><!-- /.Post -->
    <?php endwhile; ?>
  <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
