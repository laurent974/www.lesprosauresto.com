<?php get_header(); ?>
  <section class="Part slide">
    <?php
    	// Start the Loop.
    	while ( have_posts() ) : the_post(); ?>

      <?php $thumbnail = '';
      // Get the ID of the post_thumbnail (if it exists)
      $post_thumbnail_id = get_post_thumbnail_id($post->ID);
      // if it exists
      if ($post_thumbnail_id) {
      $size = apply_filters('post_thumbnail_size', 'post-thumbnail');
      $thumbnail = wp_get_attachment_image($post_thumbnail_id, $size, false, '');
      }
      if (!empty($thumbnail)) { ?>
      <div class="Part-SingleThumbnail" style="background: url('<?php echo $thumbnail; ?>') no-repeat;">
      <?php } else { ?>
      <div class="Part-NoSingleThumbnail">
        <?php } ?>
      </div>
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
