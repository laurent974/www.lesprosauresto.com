<?php get_header(); ?>
<!--<div class="Banner">-->
  <?php
    echo do_shortcode('[smartslider3 slider=2]');
  ?>
<!--</div>-->
<section class="Part slide">
  <?php query_posts('category_name=Accueil'); ?>
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <article class="Post twelve columns">
          <h1 class="Post-Title Title-H1"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="material-icons">&#xE56C;</i><span><?php the_title(); ?></span></a></h1>
          <div class="Post-Content">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class="four columns">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
              </div>
            <?php } ?>
            <?php if ( has_post_thumbnail() ) { ?><div class="eight columns"> <?php } ?>
              <?php the_content(); ?>

              <footer>
                <?php
                  if(function_exists('like_counter_p')) { like_counter_p('J\'aime !'); }
                  if(function_exists('dislike_counter_p')) { dislike_counter_p('J\'aime pas !'); }
                ?>
                 <?php comments_number( '<i class="material-icons">&#xE0CA;</i> 0', '<i class="material-icons">&#xE0C9;</i> 1', '<i class="material-icons">&#xE0C9;</i> %' ); ?>
              </footer>
            <?php if ( has_post_thumbnail() ) { ?> </div> <?php } ?>
          </div><!-- /.Post-Content -->

        </article><!-- /.Post -->
      <?php endwhile; ?>
    </div><!-- /.row -->
  <?php endif; ?>
</section><!-- /.Content -->
<?php get_footer(); ?>
