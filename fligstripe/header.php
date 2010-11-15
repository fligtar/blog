<!DOCTYPE html>
<html lang="en">

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
  <!--[if IE]>
  <script type="text/javascript" src="http://g.fligtar.com/html5-ie.js"></script>
  <![endif]-->
</head>

<body>
  <?php if (!is_page(16)): ?>
  <header id="header">
    <hgroup class="inner">
      <h1><a href="<?php echo get_option('home'); ?>/">Hey. I'm <strong>Justin Scott</strong>, often known as <strong>fligtar</strong>.</a></h1>
      <h2>I work on <a href="https://addons.mozilla.org" class="mozilla">Firefox add-ons</a> at <a href="http://www.mozilla.com" class="mozilla">Mozilla</a>. You can <a href="http://www.twitter.com/fligtar">follow me on Twitter</a> or <a href="<?php bloginfo('siteurl'); ?>/about-me/">learn more about me</a>.</h2>
    </hgroup>
  </header>
  <?php endif; ?>
  
  <section id="content">
    <div class="inner">
      
      <!--[if lt IE 9]>
      <div id="oldbrowser">
          <strong>Hey!</strong> My blog probably doesn't look too great to you, but that's because you're using a browser that doesn't support things like downloadbale fonts, gradients, and rounded corners. Not to mention the security problems. You should consider switching to <a href="http://www.getfirefox.com">Firefox</a>.
      </div>
      <![endif]-->
