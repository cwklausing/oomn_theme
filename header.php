<?php
/**
 * Template for the Header
 */

$menu_array = array(
  'menu'            => 'Main Menu',
  'menu_class'      => '',
  'container'       => false,
  'theme_location'  => 'main',
);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta <?php bloginfo( 'charset' ); ?> >
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Oswald:400,700" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
<?php include('assets/images/icons.svg'); ?>
</head>

<body <?php body_class(); ?> >
  <header class="site-header">
    <div class="site-header__content">
      <a href="<?php bloginfo( 'url' ); ?>" class="site-header__title-link">
        <h1 class="site-header__title"><?php bloginfo( 'name' ); ?></h1>
      </a>
      <nav class="main-nav">
        <?php wp_nav_menu( $menu_array ); ?>
      </nav>
    </div>
  </header>
