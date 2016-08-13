<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
  <div class="Content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
    <section class="Part slide">
      <?php if (have_posts()) : ?>
        <div class="row">
          <?php while (have_posts()) : the_post(); ?>
             <article class="Post twelve columns">
               <h1 class="Post-Title Title-H1"><i class="material-icons">&#xE8AF;</i><span><?php the_title(); ?></span></h1>
               <div class="Post-Content Post-Contact"> <?php the_content(); ?> </div>
             </article>
           <?php endwhile; ?>
         </div><!-- /.row -->
       <?php endif; ?>
    </section><!-- /.Content -->
  </div><!-- /.Content -->
<?php get_footer(); ?>
