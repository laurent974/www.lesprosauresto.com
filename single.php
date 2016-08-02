<?php get_header(); ?>
  <section class="Part slide">
    <?php
    	// Start the Loop.
    	while ( have_posts() ) : the_post(); ?>

      <?php if ( has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail(); ?>
      <?php } ?>
      
      <div class="row">
      <article class="Post twelve columns">
        <h1 class="Post-Title Title-H1"><i class="material-icons">&#xE56C;</i><span><?php the_title(); ?></span></h1>
        <?php
      		 the_content();

      		// If comments are open or we have at least one comment, load up the comment template.
      		if ( comments_open() || get_comments_number() ) {
      			comments_template();
      		} ?>
        </article>
    	<?php endwhile; ?>
  </div>
  </section>
<?php get_footer(); ?>
