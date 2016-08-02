<?php get_header(); ?>
  <section class="Part slide">
    <div class="row">
    <?php
    	// Start the Loop.
    	while ( have_posts() ) : the_post(); ?>
      <article class="Post twelve columns">
        <h1 class="Post-Title Title-H1"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="material-icons">&#xE56C;</i><span><?php the_title(); ?></span></a></h1>
        <?php
      		 the_content();

      		// If comments are open or we have at least one comment, load up the comment template.
      		if ( comments_open() || get_comments_number() ) {
      			comments_template();
      		} ?>
        </article>
    	<?php endwhile; ?>

    <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    <?php } ?>
  </div>
  </section>
<?php get_footer(); ?>
