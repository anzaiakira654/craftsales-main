<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package craftsales
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'cs'); ?></a>
		<header id="masthead" class="site-header flex">
			<div class="site-branding">
				<?php
					the_custom_logo();
					if (is_front_page()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php the_field('logo01'); ?>" ></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php the_field('logo01'); ?>" ></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation nav_pc">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav_menu',
						'container'      => false,
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div class="header_top bold button01">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<p> <span class="icon-arrow-r"></span> </p>
			</a>
		</div>