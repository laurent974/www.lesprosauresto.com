<?php get_header(); ?>
  <section class="Part slide">
    <?php
    	// Start the Loop.
    	while ( have_posts() ) : the_post(); ?>

      <?php
        if (has_post_thumbnail()) {
          $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
          $thumbnail_url = $thumbnail_data[0];
      ?>

        <div class="Part-SingleThumbnail" style="background-image:url('<?php echo $thumbnail_url ?>')"></div>

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
