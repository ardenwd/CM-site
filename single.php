<?php
get_header();
  while(have_posts()) {
    the_post(); ?>

    <p><?php the_title(); ?></p>
    <?php the_content(); ?>
    <?php
  }
get_footer();
 ?>
