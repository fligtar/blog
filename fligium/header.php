<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Justin Scott's blog on travel, photography, and tech" />
  <meta name="keywords" content="justin scott, fligtar, add-ons, firefox, mozilla, firefox add-ons, addons, extensions, travel, photography, san francisco, tech, weebly" />
  <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
  <?php wp_head(); ?>
</head>

<body>
  <nav id="nav">
    <div class="container">
      <div class="col-xs-12 col-sm-4">
        <h1><a href="<?php echo get_option('home'); ?>/">Justin<span>Scott</span></a></h1>
      </div>

      <div class="col-xs-12 col-sm-8">
        <ul>
          <li><a href="<?php echo get_option('home'); ?>/">Blog</a></li>
          <li class="spacer">&middot;</li>
          <li><a href="http://about.me/fligtar">About</a></li>
          <li class="spacer">&middot;</li>
          <li><a href="http://portfolio.fligtar.com">Photography</a></li>
        </ul>
      </div>
    </div>
  </nav>
