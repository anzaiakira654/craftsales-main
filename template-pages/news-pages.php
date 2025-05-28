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
        <section id="new_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/news_FV.png');">
			<div class="text">
				<h2>NEWS</h2>
			</div>
		</section>
		
		<section id="new_sec01">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</section>
    </main>


<?php
get_footer();
