<?php get_header(); ?>

  <div class="flex flex-small-gap">

    <div class="sidebar">
      <?php if( is_active_sidebar('page-sidebar')) : ?>

        <?php dynamic_sidebar('page-sidebar'); ?>

      <?php endif; ?>
    </div>

    <div>
      <h1><?php the_title(); ?></h1>

      <?php if(has_post_thumbnail()): ?>

      <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php the_title(); ?>"/>

      <?php endif;?>

      <?php get_template_part('includes/section', 'content'); ?>
    </div>
  </div>

<?php get_footer(); ?>