<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

<div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>

<small>Posted on: <?php the_time('F l j, Y'); ?> in <?php the_category(); ?></small>

<p><?php the_excerpt(); ?></p>
