<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); if (function_exists('is_tag') && is_tag()) { echo ' &raquo; tag archive for '; wp_title(''); } elseif (is_archive()) { echo ' &raquo; '; wp_title(''); echo ' archive'; } elseif (is_search()) { echo " &raquo; search for {$s}"; } else { wp_title(); } ?></title><meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="The personal blog of Justin Scott, likely to contain posts about Mozilla, Firefox, add-ons, PHP, and web development." />
<meta name="keywords" content="justin scott, fligtar, add-ons, firefox, mozilla, firefox add-ons, addons, extensions, themes, php, web development, amo, password exporter" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="http://www.fligtar.com/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>

<div id="head"><div id="headleft">
    <h4><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h4>
    <div id="desc"><?php bloginfo('description') ?></div>
</div>
<ul class="menu">
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>
</div>

<div id="wrap">
