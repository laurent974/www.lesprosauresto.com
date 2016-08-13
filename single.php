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
          ?>
        </article>
      </div>

      <div class="row">
        <div class="Commentary twelve columns">
          <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
              //comments_template();
              $commentsArray = get_comments('post_id='.get_the_ID());
              $comments = null;

              foreach ($commentsArray as $e) {
                $comments .= '<article>';
                $comments .= '<header>';
                $comments .= '<h1><cite class="fn">'.$e->comment_author.'</cite> dit :</h1>';
                $comments .= '<date datetime="'.$e->comment_date.'">'.date_i18n(get_option('date_format'), strtotime($e->comment_date)).'</date>';
                $comments .= '</header>';
                $comments .= '<p>'.$e->comment_content.'</p>';
                $comments .= '</article>';
                }

              echo $comments;
            }
          ?>
        </div>
      </div>
  	<?php endwhile; ?>
  </section>
<?php get_footer(); ?>
