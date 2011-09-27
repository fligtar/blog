<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Justin Scott's blog on Firefox add-ons, web development, and chicken teriyaki." />
  <meta name="keywords" content="justin scott, fligtar, add-ons, firefox, mozilla, firefox add-ons, addons, extensions, themes, php, web development, amo, password exporter" />
  <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

  <script type="text/javascript" src="http://g.fligtar.com/modernizr.min.js"></script>
</head>

<body<?php if (is_page(16)) { echo ' class="about-page"'; } ?>>
  <header id="header">
    <hgroup class="inner">
      <h1><a href="<?php echo get_option('home'); ?>/"><span>&middot;</span>FLIGTAR<span>&middot;</span></a></h1>
      <h2><a href="#">about</a> &middot; <a href="#">twitter</a></h2>
    </hgroup>
  </header>
  
  <section id="content">
    <div class="outer">
      <div class="inner">
      
      <div id="super-ugly-notice">
        <p><strong>It's not me. It's you.</strong> If you were using a modern browser, this blog would look a whole lot nicer. Your web clunker doesn't support downloadable fonts, gradients, or even rounded corners! Not to mention the security problems. Try a <a href="http://www.getfirefox.com">better browser</a>.</p>
      </div>
      
      <div id="ugly-notice">
        <p><strong>FUN FACT!</strong> Your browser doesn't support CSS gradients. Anything pretty on this page is actually a screenshot of what it looks like in Firefox. Try a <a href="http://www.getfirefox.com">better browser</a> and see what else you've been missing out on.</p>
      </div>
