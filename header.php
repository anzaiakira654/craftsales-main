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
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php the_field('logo01', get_option('page_on_front')); ?>" alt="ロゴ"></a></p>
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
			<div class="header_sp">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<nav class="nav_sp">
						<ul>
							<li><a href="<?php echo esc_url(home_url('/')); ?>"><p>TOPページ</p></a></li>
							<li><a href="news-list"><p>NEWS</p></a></li>
							<li><a href="company.html"><p>会社情報</p></a></li>
							<li><a href="recruit.html"><p>求人情報</p></a></li>
							<li><a href="contact.html"><p>お問い合わせ</p></a></li>
							<li><a href="sitemap.html"><p>サイトマップ</p></a></li>
							<li><a href="business.html"><p>事業内容</p></a></li>
							<li><a href="business.html#biz_sec02-1"><p>法人向け営業代行業務</p></a></li>
							<li><a href="business.html#biz_sec02-2"><p>営業コンサルティング</p></a></li>
							<li><a href="business.html#biz_sec02-3"><p>テレアポ支援</p></a></li>
							<li><a href="business.html#biz_sec02-4"><p>営業研修・人材育成</p></a></li>
						</ul>
					</nav>
				</div>
		</header><!-- #masthead -->

		<div class="header_top bold button01">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<p> <span class="icon-arrow-r"></span> </p>
			</a>
		</div>