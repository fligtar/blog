<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />
<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
		<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>
<!-- fligtar.com ribbon
<link rel="stylesheet" href="http://g.fligtar.com/ribbon.css" type="text/css" />
<script language="JavaScript" type="text/javascript" src="http://g.fligtar.com/jquery.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript" src="http://g.fligtar.com/ribbon.js"></script>
-->
</head>
<body>
<!-- WP Theme Credits -->
<div style="display: none" id="level2">Find more about <a href="http://www.annjewelry.com/"><b>diamond jewelry</b></a>.</div>
<!--<div id="ribbon_menu" style="display: none;"></div>
<div id="ribbon"><div id="ribbon_logo"></div></div>-->
<div id="pages">    
<h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
<ul>
      <?php wp_list_pages('depth=1&title_li=' ); ?>
    </ul>
</div>
<div id="wrap">
<div id="logo">
</div>
	<div id="tagline"><?php bloginfo('description'); ?></div>