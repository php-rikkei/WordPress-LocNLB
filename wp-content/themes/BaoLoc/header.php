<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<link rel="profile" href="http://gmgp.org/xfn/11"/>
	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
	<div class="logo">
		<?php getCodeHeader();?>
		<?php getCodeMenu('primary-menu');?>
	</div>