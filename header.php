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
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NR5JBVF');</script>
  <!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142137673-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142137673-1');
  </script>

  <?php wp_head(); ?>
<?php include('assets/images/icons.svg'); ?>
</head>

<body <?php body_class(); ?> >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR5JBVF"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="site-header">
    <div class="site-header__content">
      <a href="<?php bloginfo( 'url' ); ?>" class="site-header__title-link">
        <h1 class="site-header__title"><?php bloginfo( 'name' ); ?></h1>
      </a>
      <div class="mobile-nav__cover"></div>
      <nav class="main-nav" id="mobile-nav">
        <?php wp_nav_menu( $menu_array ); ?>
      </nav>
      <div class="hamburger-menu__wrap" id="mobile-menu-button">
        <div class="hamburger-menu" id="hamburger-menu">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </div>
      </div>
    </div>
  </header>
