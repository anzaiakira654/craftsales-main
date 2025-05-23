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
 * Template Name:sitemap
 */

get_header();
?>

    <main>
        <section id="sit_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/sitemap_FV.png');">
			<div class="text">
				<h2>Sitemap</h2>
			</div>
		</section>

		<section id="sit_sec01">
			<div class="sec_main">
				<div class="site-inner flex_s">
					<div class="site-column">
						<ul>
							<li><a href="<?php echo esc_url(home_url('/')); ?>"><p>TOPページ</p></a></li>
							<li><a href="<?php echo home_url('/news/'); ?>"><p>NEWS</p></a></li>
							<li><a href="<?php echo home_url('/company/'); ?>"><p>会社情報</p></a></li>
						</ul>
					</div>
					<div class="site-column">
						<ul>
							<li><a href="<?php echo home_url('/business/'); ?>"><p>事業案内</p></a></li>
							<li><a href="<?php echo home_url('/business/#biz_sec02-1/'); ?>"><p>コンサルティング事業</p></a></li>
							<li><a href="<?php echo home_url('/business/#biz_sec02-2/'); ?>"><p>企画・提案事務</p></a></li>
							<li><a href="<?php echo home_url('/business/#biz_sec02-3/'); ?>"><p>サービス・運営支援</p></a></li>
							<li><a href="<?php echo home_url('/business/#biz_sec02-4/'); ?>"><p>サポート</p></a></li>
						</ul>
					</div>
					<div class="site-column">
						<ul>
							<li><a href="<?php echo home_url('/recruit/'); ?>"><p>求人情報</p></a></li>
							<li><a href="<?php echo home_url('/recruit/#rec_sec03/'); ?>"><p>社員インタビュー</p></a></li>
						</ul>
					</div>
					<div class="site-column">
						<ul>
							<li><a href="<?php echo home_url('/contact/'); ?>"><p>お問い合わせ</p></a></li>
							<li><a href="<?php echo home_url('/sitemap/'); ?>"><p>サイトマップ</p></a></li>
							<li><a href="<?php echo home_url('/policy/'); ?>"><p>プライバシーポリシー</p></a></li>
						</ul>
					</div>
				</div>
				<div class="site-icons">
					<img src="<?php the_field('sitemap_img01'); ?>" >
				</div>
			</div>
		</section>
    </main>

<?php
get_footer();
