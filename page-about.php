<?php

/*
  Template Name: About Page
 */

get_header(); ?>

  <h1>This is my about page</h1>

  <?php
        if ( have_posts() ):
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        endif;
  ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
