<?php if (have_posts()): while(have_posts()): the_post(); ?>

  <div class="archive-post">
    <?php if(has_post_thumbnail()): ?>

    <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php the_title(); ?>"/>

    <?php endif;?>

    <div>
      <h1><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>

      <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
  </div>
<?php endwhile; else: endif; ?>