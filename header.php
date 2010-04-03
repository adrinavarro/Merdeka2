<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/theme.js"></script>
<?php wp_head(); ?>
</head>
<body>
<?php get_sidebar(); ?>
<div id="displaybar"></div>
<div id="js">
<a id="toggle" href="#" onclick="toggle();" title="" >Sidebar</a></div>
<div id="container">
	<div id="header">
		<h1><a href="<?php bloginfo('url') ?>" ><?php bloginfo('name') ?></a></h1>
		<?php bloginfo('description') ?>
	</div>