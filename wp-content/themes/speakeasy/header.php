<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package speakeasy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'speakeasy' ); ?></a>

	<header id="masthead" class="site-header">
		

		<nav id="site-navigation" class="main-navigation">
			<div class="logo-holder">
					<a href="http://localhost:8888/speakeasy/"><img src="http://localhost:8888/speakeasy/wp-content/uploads/2019/04/logo-Screen-Shot.png"/></a>
			</div>
			<div class="my-primary-menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'speakeasy' ); ?></button> 
					<?php
					wp_nav_menu( array(
	  			'theme_location' => 'menu-1',
			  	'menu_id'        => 'primary-menu',
			    ) );
			    ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
