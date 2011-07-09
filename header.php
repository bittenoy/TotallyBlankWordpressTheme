<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>


 <body <?php body_class(); ?>> <!-- http://codex.wordpress.org/Template_Tags/body_class -->

<header>

	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
	<p><?php bloginfo('description'); ?> </p>

	<nav>

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	</nav>

</header>

<div id="main">
