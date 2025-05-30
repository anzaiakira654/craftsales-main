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

	<section id="top_FV" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/top_FV.png');">
		<div class="text">
			<h2>時代は変わり続ける。<br>だから、挑み続ける。</h2>
		</div>
	</section>

	<section id="top_sec01" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/top_FV2.png');">
		<div class="section_title">
			<h2>営業に、もっと人のチカラを。</h2>
		</div>
		<div class="sec_main flex_s">
			<div class="img">
				<img src="<?php the_field('top_img01'); ?>" >
			</div>
			<div class="text">
				<p>営業は、ただ商品を売るだけの仕事ではありません。<br>クライアントの想いを受け止め、その先の未来をともにつくる仕事です。<br>私たちは、数字だけでなく“人”を大切にしながら、変化の時代に挑み続けています。<br><br>
					<span class="t_right">代表取締役 <?php the_field('field_6823f3f8bb68c', 'president_name'); ?></span>
				</p>
			</div>
		</div>
	</section>

	<section id="top_sec02">
		<div class="section_title">
			<h2>会社情報</h2>
		</div>
		<div class="sec_main flex_s">
			<div class="img">
				<img src="<?php the_field('top_img02'); ?>" >
			</div>
			<div class="text">
				<p>日々変化する社会環境や多様化するお客様のニーズに柔軟に対応しながら、常に高品質で誠実なサービスの提供を心がけています。<br>企業様・個人様を問わず、お客様一人ひとりに寄り添ったご提案とサポートを行い、長期的に信頼していただけるパートナーであり続けることを目指しています。<br><br>「人と人とのつながり」や「丁寧な仕事」を大切にし、小さなご依頼も大きなプロジェクトも、ひとつひとつ真摯に取り組んでまいります。</p>
			</div>
		</div>
		<div class="button">
			<a href="<?php echo home_url('/company/'); ?>">
				<p class="button-text">
					<span>会社情報を見る</span><span class="icon-arrow-r"></span>
				</p>
			</a>
		</div>
	</section>

	<section id="top_sec03">
		<div class="section_title">
			<h2>事業案内</h2>
		</div>
		<div class="sec_main flex_s">
			<div class="box flex">
				<div class="img">
					<img src="<?php the_field('top_icon01'); ?>" >
				</div>
				<div class="text">
					<h3>法人向け営業代行業務</h3>
					<p>ターゲット選定からアプローチ、アポイント獲得、クロージングまでを一貫して代行します。</p>
				</div>
			</div>
			<div class="box flex">
				<div class="img">
					<img src="<?php the_field('top_icon02'); ?>" >
				</div>
				<div class="text">
					<h3>営業コンサルティング</h3>
					<p>社内にナレッジとして蓄積するために、営業体制そのものの見直しや改善を行います。</p>
				</div>
			</div>
		</div>
		<div class="sec_main flex_s">
			<div class="box flex">
				<div class="img">
					<img src="<?php the_field('top_icon03'); ?>" >
				</div>
				<div class="text">
					<h3>テレアポ支援</h3>
					<p>ヒアリング設計からトークスクリプト、実施運用までサポートし、アポ獲得率と商談化率を向上させます。</p>
				</div>
			</div>
			<div class="box flex">
				<div class="img">
					<img src="<?php the_field('top_icon04'); ?>" >
				</div>
				<div class="text">
					<h3>営業研修・人材育成</h3>
					<p>「成果が出る営業」を育てるための、実践的な研修プログラムを提供しています。</p>
				</div>
			</div>
		</div>
		<div class="button">
			<a href="<?php echo home_url('/business/'); ?>">
				<p class="button-text">
					<span>サービスを見る</span><span class="icon-arrow-r"></span>
				</p>
			</a>
		</div>
	</section>

	<section id="top_sec04">
		<div class="section_title">
			<h2>求人情報</h2>
		</div>
		<div class="sec_main">
			<div class="sec04_01">
				<h3>今できることから、</h3>
			</div>
			<div>
				<img src="<?php the_field('top_img03'); ?>" >
			</div>
			<div class="sec04_02">
				<h3>始めよう！</h3>
			</div>
			<div class="sec04_03">
				<img src="<?php the_field('top_img04'); ?>" >
			</div>
		</div>
		<div class="t_center">
			<p>未経験でも大丈夫です。<br>大切なのは、“話したい” “伝えたい”という気持ち。<br>私たちと一緒に、クライアントに必要とされる営業マンを目指しませんか？</p>
		</div>
		<div class="button">
			<a href="<?php echo home_url('/recruit/'); ?>">
				<p class="button-text">
					<span>求人情報を見る</span><span class="icon-arrow-r"></span>
				</p>
			</a>
		</div>
	</section>

	<section id="top_sec05">
		<div class="sec_main">
			<div class="section_title">
				<h2>NEWS</h2>
			</div>
			<div class="sec05">
				<?php echo do_shortcode('[news_list]'); ?>
			</div>
			<div class="button">
			<a href="<?php echo home_url('/news-list/'); ?>">
				<p class="button-text">
					<span>一覧を見る</span><span class="icon-arrow-r"></span>
				</p>
			</a>
		</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
