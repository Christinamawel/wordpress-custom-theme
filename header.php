<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php wp_head(); ?>
  
</head>
<body>

<div class="wrapper">

  <header>

  <div class="nav-width-container">

    <div class="nav-container">
      <?php 
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'top-bar'
        )
      );
      ?>
    </div>

  </div>

  </header>

  <section class="container">