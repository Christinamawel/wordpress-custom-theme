<?php  
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

  <div class="flex">
    <div class="left-column">
      <p>this is the contact form</p>
    </div>
    <div class="right-column">
    <?php get_template_part('includes/section', 'content'); ?>
    </div>
  </div>

<?php get_footer(); ?>