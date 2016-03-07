<?php get_header(); ?>

	<h1>This is my index</h1>

    <?php
        $args = array(
          'type' => 'post',
          'posts_per_page' => 3,
          'category_name' => 'events'
        );

        $newsItem = new WP_Query($args);

        if( $newsItem->have_posts() ):
          while( $newsItem->have_posts() ): $newsItem->the_post();
    ?>
            <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
        endif;

    ?>

<?php get_footer(); ?>
