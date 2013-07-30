
<?php get_header(); ?>

<div id='mainWrapper' class='fixedBox'>
                <div id='mainLeft' class='fixedBox'>
                <article>  
                  <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
  
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                  <small><?php the_time('j F, Y'); ?> door <?php the_author_posts_link() ?></small>
  
                  <?php the_content(); ?>

                  <?php edit_post_link( 'Bewerken' ); ?>
  
                  <?php endwhile; else : ?>
  
                  <p><?php _e('Sorry, geen artikelen gevonden.'); ?></p>
  
                  <?php endif; ?>
                </article>
                </div><!--  end mainLeft  -->

                <?php get_sidebar(); ?>

            </div><!--  end mainWrapper -->
          </div><!--  end main  -->
          </div><!--  end container  -->

<?php get_footer(); ?>