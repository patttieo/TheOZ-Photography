<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title( '&raquo;', true, 'left' ); ?></title>

  <?php if ( is_search() || is_404() ) : ?>
    <meta name="robots" content="noindex, nofollow">
  <?php else: ?>
    <meta name="robots" content="all">
  <?php endif; ?>
  <?php if ( is_home() ) : ?>
    <meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ); ?>">
  <?php elseif ( is_single() ) : ?>
    <meta name="description" content="<?php esc_attr( wp_title() ) ?>">
  <?php elseif ( is_archive() ) : ?>
    <meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); ?> » Archives">
  <?php elseif ( is_search() ) : ?>
    <meta name="description" content="<?php esc_html( $s ) ?>">
  <?php else : ?>
    <meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); ?> : <?php esc_attr( bloginfo( 'description' ) ); ?>">
  <?php endif; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>">
  
  <script src="https://use.typekit.net/dpl4lwe.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!-- required for comment functionality -->
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <!-- required for all wordpress themes and placed at the end of the head tag element -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header role="banner" class="header-wrapper">
    <div class="menu-triggers">
      <div class="open-menu active menu-trigger">
        <i class="material-icons fa">menu</i>
      </div>
      <div class="close-menu menu-trigger">
        <i class="material-icons fa">close</i>
      </div>    
    </div>
    <div class="menu-wrapper">
      <div class="menu-backgrounds">
        <div class="bg-img home-img"></div>
        <div class="bg-img aboutme-img"></div>
        <div class="bg-img mywork-img"></div>
        <div class="bg-img contact-img"></div>
      </div>
      <?php wp_nav_menu( array(
        'menu' => 'Main'
        // 'walker' => new Description_Walker
      )); ?>
    </div>
  </header>
