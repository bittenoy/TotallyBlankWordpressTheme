<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></title>

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"/>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>


 <body <?php body_class(); ?>> <!-- http://codex.wordpress.org/Template_Tags/body_class -->

<header id="header">
	<div id="info">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
		<p><?php bloginfo('description'); ?> </p>
	</div>

	<nav>

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	</nav>

</header>

<div id="main">
