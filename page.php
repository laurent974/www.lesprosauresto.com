<?php get_header(); ?>
<section class="Part slide">
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
         <article class="Post twelve columns">
           <h1 class="Post-Title Title-H1"><i class="material-icons">&#xE2C7;</i><span><?php the_title(); ?></span></h1>
           <div class="Post-Content"> <?php the_content(); ?> </div>
         </article>
       <?php endwhile; ?>
     </div><!-- /.row -->
   <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
