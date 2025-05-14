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

	<section id="biz_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/business_FV.png');">
			<div class="text">
				<h2>Business</h2>
			</div>
		</section>

		<section id="biz_sec01">
			<div class="section_title">
				<h2>ビジネスを前進させる</h2>
			</div>
			<div class="blue_line"></div>
			<div class="sec_main">
				<div class="text">
					<p>私たちは、営業のプロフェッショナルとして、法人企業様の課題に寄り添い、営業成果の最大化を支援しています。テレアポや訪問営業の代行をはじめ、営業組織の立ち上げや育成に必要なコンサルティング・研修まで、営業活動をトータルにサポート。</p>
				</div>
			</div>
		</section>
		
		<section id="biz_sec02">
			<div id="biz_sec02-1" class="sec2-1 flex_s">
				<div class="text">
					<h2>法人向け営業代行業務</h2>
					<p>
					営業組織の課題を洗い出し、売上向上につながる最適な戦略をご提案。現場目線と経営視点を両立させたコンサルティングで、仕組みづくり・数字管理・営業戦術を一体化させ、持続可能な営業体制を構築します。
					</p>
					<div class="tag"><p>実績：累計100社超の営業支援実績</p></div>
				</div>
				<div class="img">
					<img src="<?php the_field('business_img01'); ?>" >
				</div>
			</div>
			<div id="biz_sec02-2" class="sec2-1 flex_s">
				<div class="text">
					<h2>営業コンサルティング</h2>
					<p>
					営業組織の課題を洗い出し、売上向上につながる最適な戦略をご提案。現場目線と経営視点を両立させたコンサルティングで、仕組みづくり・数字管理・営業戦術を一体化させ、持続可能な営業体制を構築します。
					</p>
					<div class="tag"><p>営業の仕組みを“戦略レベル”から整備可能</p></div>
				</div>
				<div class="img">
			    	<img src="<?php echo get_template_directory_uri(); ?>/src/img/business_img02.png" width="431" height="288" alt=""/>
				</div>
			</div>
			<div id="biz_sec02-3" class="sec2-1 flex_s">
				<div class="text">
					<h2>テレアポ支援</h2>
					<p>
					商談につながる「質の高いアポイント」を提供します。ターゲット選定からトークスクリプト作成、架電対応、結果分析まで一貫対応。業種や商材に応じた丁寧なヒアリングで、無駄のないテレアポ活動を実現します。
					</p>
					<div class="tag"><p>専門チームによる高品質なアポイントを獲得</p></div>
				</div>
				<div class="img">
			    	<img src="<?php echo get_template_directory_uri(); ?>/src/img/business_img03.png" width="431" height="288" alt=""/>
				</div>
			</div>
			<div id="biz_sec02-4" class="sec2-1 flex_s">
				<div class="text">
					<h2>営業研修・人材育成</h2>
					<p>
					新人・中堅・管理職それぞれのレベルに応じた営業スキル研修を実施。ロールプレイやケーススタディを交えた実践型のカリキュラムで、即戦力となる営業人材を育成します。チーム力の底上げにも効果的です。
					</p>
					<div class="tag"><p>即実践に使える営業スキルが身につく</p></div>
				</div>
				<div class="img">
			    	<img src="<?php echo get_template_directory_uri(); ?>/src/img/business_img04.png" width="431" height="288" alt=""/>
				</div>
			</div>
		</section>

</main><!-- #main -->

<?php
get_footer();
