<?php get_header(); ?>

  <h1><?php the_title(); ?></h1>

  <?php get_template_part('includes/section', 'content'); ?>

  <?php get_search_form(); ?>

<?php get_footer(); ?>