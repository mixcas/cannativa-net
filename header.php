<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
get_template_part('partials/globie');
get_template_part('partials/seo');
?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/dist/img/favicon.png">

<?php if (is_singular() && pings_open(get_queried_object())) { ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php } ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,800;1,300;1,400;1,700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<section id="main-container">

  <nav id="header" class="padding-bottom-small padding-top-small">
    <div class="container grid-row justify-between">
      <div class="grid-item">
        <div class="logo-container align-items-center">
          <?php get_template_part('partials/svg/Isotipo-Alabaster.svg'); ?>
          <?php get_template_part('partials/svg/Logotipo-Alabaster.svg'); ?>
        </div>

        <h1 class="u-visuallyhidden"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
      <div class="desktop-nav-right grid-item">
        <div class="desktop-menu-link font-size-mid font-bold font-uppercase">
          <ul>
            <li>
              <a href="#">
                Revista
              </a>
            </li>
            <li>
              <a href="#">
                Servicios
              </a>
            </li>
            <li>
              <a href="#">
                Qui??nes somos
              </a>
            </li>
            <li>
              <a href="#">
                Contacto
              </a>
            </li>
            <li>
              <a href="#">
                Dona
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
