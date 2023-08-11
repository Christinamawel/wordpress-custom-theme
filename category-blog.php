<?php get_header(); ?>

  <h1><?php echo single_cat_title(); ?></h1>

  <?php get_template_part('includes/section', 'archive'); ?>

  <?php the_posts_pagination(); ?>

<?php get_footer(); ?>