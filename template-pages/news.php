<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package craftsales
 * 
 * Template Name:news
 */

get_header();
?>

<main>

	<!-- メインvisual -->
	<?php get_template_part($hp_dir . '/tmp--news-mainvisual'); ?>
	<!-- メインvisual -->
	<!-- ニュース一覧ショートコード(function.php 195行目～) -->
	<?php echo do_shortcode('[news_list_all]'); ?>
	<!-- ニュース一覧ショートコード -->
	
</main>


<?php
get_footer();
