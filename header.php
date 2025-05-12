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
		<header>
			<div class="header_menu flex">
				<h1 class="logo">
					<div class="logo_main">
						<a href="<?php echo esc_url(home_url('/')); ?>">
						<h1><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo01.png" width="420" height="100" alt=""/></h1>
						</a>
					</div>
				</h1>
				<nav class="nav_pc">
					<ul class="flex">
						<li><a href="<?php echo get_template_directory_uri(); ?>/news.php"><p>NEWS</p></a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/company.php"><p>会社情報</p></a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/business.php"><p>事業内容</p></a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/recruit.php"><p>求人情報</p></a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/contact.php"><p>お問い合わせ</p></a></li>
					</ul>
				</nav>
				<div class="header_sp">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<nav class="nav_sp">
						<ul>
							<li><a href="<?php echo esc_url(home_url('/')); ?>"><p>TOPページ</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/news.html"><p>NEWS</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/company.html"><p>会社情報</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/recruit.html"><p>求人情報</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/contact.html"><p>お問い合わせ</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/sitemap.html"><p>サイトマップ</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/business.html"><p>事業内容</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-1"><p>法人向け営業代行業務</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-2"><p>営業コンサルティング</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-3"><p>テレアポ支援</p></a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-4"><p>営業研修・人材育成</p></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<div class="header_top bold button01">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<p> ＞ </p>
			</a>
		</div>