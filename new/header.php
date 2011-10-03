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
</head>

<body<?php if (is_page(16)) { echo ' class="about-page"'; } ?>>
    <header id="header">
        <hgroup class="inner">
            <h1><a href="<?php echo get_option('home'); ?>/"><span>&middot;</span>FLIGTAR<span>&middot;</span></a></h1>
            <h2><a href="#" onclick="$('#about').show(); $(this).hide(); return false;">about me</a></h2>
        </hgroup>
    </header>

    <section id="about">
        <p><a href="http://www.twitter.com/fligtar" class="twitter">Justin Scott</a> has an undiagnosed addiction to <a href="http://en.wikipedia.org/wiki/Cha_siu_baau">steamed pork buns</a><br/> and leads the <a href="https://addons.mozilla.org" class="mozilla">Add-ons</a> team at <a href="http://www.mozilla.org" class="mozilla">Mozilla</a>. <a href="http://about.me/fligtar" class="more">more <b>&raquo;</b></a></p>
    </section>

    <section id="content">
