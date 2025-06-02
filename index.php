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
 * Template Name:TOP
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- メインvisual -->
	<?php get_template_part($hp_dir . '/tmp--index-mainvisual'); ?>
    <!-- メインvisual -->
	<!-- セクション01 -->
	<?php get_template_part($hp_dir . '/tmp--index-sec01'); ?>
    <!-- セクション01 -->
	<!-- セクション02 -->
	<?php get_template_part($hp_dir . '/tmp--index-sec02'); ?>
    <!-- セクション02 -->
	<!-- セクション03 -->
	<?php get_template_part($hp_dir . '/tmp--index-sec03'); ?>
    <!-- セクション03 -->
	<!-- セクション04 -->
	<?php get_template_part($hp_dir . '/tmp--index-sec04'); ?>
    <!-- セクション04 -->
	<!-- セクション05 -->
	<?php get_template_part($hp_dir . '/tmp--index-sec05'); ?>
    <!-- セクション05 -->

</main><!-- #main -->

<?php
get_footer();
