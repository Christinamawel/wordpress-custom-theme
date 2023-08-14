<?php get_header(); ?>

<div class="flex flex-small-gap">
  <div class="sidebar">
      <?php if( is_active_sidebar('blog-sidebar')) : ?>

        <?php dynamic_sidebar('blog-sidebar'); ?>

      <?php endif; ?>
  </div>

  <div>
    <h1><?php echo single_cat_title(); ?></h1>

    <?php get_template_part('includes/section', 'archive'); ?>

    <?php the_posts_pagination(); ?>
  </div>
</div>

<?php get_footer(); ?>