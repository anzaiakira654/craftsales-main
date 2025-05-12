<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package craftsales
 */

?>

	<footer>
		<div class="top flex_s">
			<div class="menu">
				<div class="logo_main">
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/logo02.png" width="270" height="53" alt=""/> 
				</div>
				<p>
				株式会社CRAFT SALES<br>
				〒100-0001<br>
				東京都千代田区千代田1-1-1<br>
				TEL:000-1234-5678<br>
				FAX:000-1234-5678
				</p>
				<div class="button_icon">
					<a href="index.html">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/icon01.png" width="48" height="48" alt=""/>
					</a>
				</div>
			</div>
			<div class="wid02 flex">
				<div class="wid03">
					<a href="<?php echo esc_url(home_url('/')); ?>"><p>TOPページ</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/news.html"><p>NEWS</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/company.html"><p>会社情報</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/recruit.html"><p>求人情報</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/contact.html"><p>お問い合わせ</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/sitemap.html"><p>サイトマップ</p></a>
				</div>
				<div class="wid03">
					<a href="<?php echo get_template_directory_uri(); ?>/business.html"><p>事業案内</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-1"><p>法人向け営業代行業務</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-2"><p>営業コンサルティング</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-3"><p>テレアポ支援</p></a>
					<a href="<?php echo get_template_directory_uri(); ?>/business.html#biz_sec02-4"><p>営業研修・人材育成</p></a>
				</div>
			</div>
		</div>
		<div class="copy">
			<div id="copyright"><p>Copyright© 2025 CRAFT SALES . All Rights Reserved. </p></div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
