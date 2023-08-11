<?php if (have_posts()): while(have_posts()): the_post(); ?>

  <?php 
  $tags = get_the_tags();
  foreach($tags as $tag):?>

    <a href="<?php echo get_tag_link($tag->term_id);?>">
    <?php echo $tag->name;?>
    </a>

  <?php endforeach; ?>

  <?php 
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  ?>
  <p>Posted by: <?php echo $fname; ?> <?php echo $lname; ?></p>
  
  <p><?php echo get_the_date('F jS, Y'); ?></p>

  <?php the_content(); ?>

  <?php 
  $categories = get_the_category();
  foreach($categories as $cat):?>

    <a href="<?php echo get_category_link($cat->term_id);?>">
    <?php echo $cat->name;?>
    </a>

  <?php endforeach; ?>

  <?php wp_link_pages(); ?>

  <?php comments_template(); ?>

<?php endwhile; else: endif; ?>