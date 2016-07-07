<?php get_header(); ?>
<section class="Part slide">
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
         <article class="Post twelve columns">
           <h1 class="Post-Title"><?php the_title(); ?></h1>
           <p class="Post-Content"> <?php the_content(); ?> </p>
         </article>
       <?php endwhile; ?>
     </div><!-- /.row -->
   <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
