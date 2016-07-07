<?php get_header(); ?>
<div class="Banner">
  <p>Les pros au reso !</p>
</div>
<section class="Part slide">
  <?php query_posts('category_name=Accueil'); ?>
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <article class="Post twelve columns">
          <h1 class="Post-Title Title-H1"><i class="material-icons">&#xE56C;</i><span><?php the_title(); ?></span></h1>
          <div class="Post-Content">
            <?php the_content(); ?>
          </div><!-- /.Post-Content -->
        </article><!-- /.Post -->
      <?php endwhile; ?>
    </div><!-- /.row -->
  <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
