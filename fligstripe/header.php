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

<body<?php if (is_page(16)) { echo ' class="about-page"'; } ?>>
  <header id="header">
    <hgroup class="inner">
      <h1><a href="<?php echo get_option('home'); ?>/">Hey. I'm <strong>Justin Scott</strong>, often known as <strong>fligtar</strong>.</a></h1>
      <?php if (is_page(16)): ?>
        <h2><a href="<?php echo get_option('home'); ?>/">back to blog</a></h2>
      <?php else: ?>
        <h2>I work on <a href="https://addons.mozilla.org" class="mozilla">Firefox add-ons</a> at <a href="http://www.mozilla.com" class="mozilla">Mozilla</a>. You can <a href="http://www.twitter.com/fligtar">follow me on Twitter</a> or <a href="<?php bloginfo('siteurl'); ?>/about-me/">learn more about me</a>.</h2>
      <?php endif; ?>
    </hgroup>
  </header>
  
  <section id="content">
    <div class="outer">
      <div class="inner">
      
      <!--[if lt IE 9]>
      <div id="oldbrowser">
        <h3>It's not me. It's you.</h3>
        <p>If you were using a current browser my blog would look a whole lot nicer than what you're seeing right now. Your web clunker doesn't support downloadable fonts, gradients, or even rounded corners! Not to mention the security problems.  You should strongly consider upgrading to the latest version of your browser. Or just <a href="http://www.getfirefox.com">download Firefox</a>.
      </div>
      <![endif]-->
