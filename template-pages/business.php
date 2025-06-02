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
 * Template Name:business
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- メインvisual -->
	<?php get_template_part($hp_dir . '/tmp--business-mainvisual'); ?>
	<!-- メインvisual -->
	<!-- セクション01 -->
	<?php get_template_part($hp_dir . '/tmp--business-sec01'); ?>
	<!-- セクション01 -->
	<!-- セクション02 -->
	<?php get_template_part($hp_dir . '/tmp--business-sec02'); ?>
	<!-- セクション02 -->

</main><!-- #main -->

<?php
get_footer();
