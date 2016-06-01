<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!--=== META TAGS ===-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="Keywords">
        <meta name="author" content="Name">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--=== LINK TAGS ===-->
        <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--=== TITLE ===-->  
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <!--=== WP_HEAD() ===-->
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
	    <?php get_template_part('partials/navbar') ?>
	    <div class="container">
			<header>
			    <h1 class="header-title">
			    	<a href="/">
			        <?php
	                    bloginfo('name');
	                ?>
	                </a>
			    </h1>
			    <p class="header-description">
			        <small>
			            <?php
		                    bloginfo('description');
		                ?>
			        </small>
			    </p>
			</header>