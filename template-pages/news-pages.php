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
 * Template Name: ニュース専用テンプレート
 * Template Post Type: news
 */

get_header();
?>

<main>

	<!-- メインvisual -->
	<?php get_template_part($hp_dir . '/tmp--news-pages-mainvisual'); ?>
	<!-- メインvisual -->
	<!-- セクション01 -->
	<?php get_template_part($hp_dir . '/tmp--news-pages-sec01'); ?>
	<!-- セクション01 -->

</main>


<?php
get_footer();
