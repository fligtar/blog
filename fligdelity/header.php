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
    
    <header id="header">
        <div>
        	<h1><a href="<?php echo get_option('home'); ?>/">fligtar</a></h1>
            <h2><a href="http://twitter.com/fligtar/status/7648477490"><span class="d">delightfully</span> <span class="p">paranoid</span></a></h2>
        </div>
    </header>
    
    <section id="content">
