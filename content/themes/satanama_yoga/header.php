<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'title' ); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <!-- Section header comprenant la navbar. -->
<header class="header">
  <div class="topmenu">
    <a href="<?php echo get_home_url(); ?>" class="logo-alt">Satanama Yoga</a>
    <a href="<?php echo get_home_url(); ?>" class="logo"><img class="logo__image" src="http://localhost/Projet/Ecole-de-Yoga/content/uploads/2019/05/satanamayoga_logo.png" alt=""></a>
    <a href="#" class="burger-button displayMenu "><i class="fa fa-bars"></i></a>

    <nav class="nav nav--hidden">
      
      <ul class="nav__main">
        <li class="nav__main__item"><a href="<?php echo get_permalink( 105 ); ?>" class="nav__main__item__link">L'école</a></li>
        <li class="nav__main__item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'cours' ) ) ) ; ?>" class="nav__main__item__link">Cours</a></li>
        <li class="nav__main__item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'blog' ) ) ) ; ?>" class="nav__main__item__link">Blog</a></li>
        <li class="nav__main__item"><a href="<?php echo get_post_type_archive_link( 'pratiquer' ); ?>" class="nav__main__item__link">Pratiquer</a></li>
      </ul>
      <a href="#" class="close-button hideMenu"><i class="fa fa-times"></i></a>
    </nav>
  </div>
</header>

    <!-- Partie Main, comprenant les différentes section du site internet -->
    <main class="content">
