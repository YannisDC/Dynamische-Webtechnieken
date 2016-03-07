
<?php get_header(); ?>

  <?php
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>
        <small>By <?php the_author(); ?>
        <?php the_post_thumbnail('full'); ?></small>

        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
<?php endwhile;
    endif;
  ?>

<?php get_footer(); ?>
