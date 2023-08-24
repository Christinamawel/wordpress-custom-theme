<?php get_header(); ?>

<h1>Search Results for '<?php echo get_search_query(); ?>'</h1>

  <?php get_template_part('includes/section', 'searchresults'); ?>

  <?php the_posts_pagination(); ?>

<?php get_footer(); ?>