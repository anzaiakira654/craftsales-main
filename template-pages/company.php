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
 * Template Name:company
 */

get_header();
?>
    <main>
        <section id="com_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/company_FV.png');">
			<div class="text">
				<h2>Company</h2>
			</div>
		</section>

		<section id="com_sec01">
			<div class="section_title">
				<h2>代表挨拶</h2>
			</div>
			<div class="blue_line"></div>
			<div class="sec_main">
			  <div class="text">
					<p>時代が変われば、営業のあり方も変わっていきます。けれど、どんなに環境が変化しても、「人の力で価値を届ける」という本質は変わりません。<br>
					私たちは、営業代行・企画開発・人材育成といった多角的なアプローチを通じて、企業の成長に本気で向き合うパートナーとして歩んできました。<br>
					世の中の変化はますます激しく、答えのない課題も増えています。だからこそ、私たちは「仕組み」だけでなく、「人の力」にこだわります。成果を出せる営業チーム、挑戦できる組織文化、新しい価値を生み出す仕組みづくり。それらを一つひとつ、丁寧に育てていくことが私たちの使命です。<br>
					これからも現場に根ざし、企業と人がともに成長できる未来をつくり続けてまいります。<br>
					今後ともご支援ご指導のほど、よろしくお願い申し上げます。<br><br>
					<span class="t_right">代表取締役 <?php the_field('president_name'); ?></span></p>
				</div>
				<div class="img">
	    	    	<img src="<?php echo get_template_directory_uri(); ?>/src/img/company_img01.png" width="700" height="269" alt=""/>
				</div>
			</div>
		</section>
		
		<section id="com_sec02">
			<div class="section_title t_left">
				<h2>会社情報</h2>
			</div>
			<div class="sec_main">
				<div class="text">
					<table class="company-profile">
						<tr>
							<th><p>会社名</p></th>
							<td><p><?php the_field('company_name'); ?></p></td>
						</tr>
						<tr>
							<th><p>所在地</p></th>
							<td><p><?php the_field('president_name'); ?></p></td>
						</tr>
						<tr>
							<th><p>代表者名</p></th>
							<td><p><?php the_field('company_address'); ?></p></td>
						</tr>
						<tr>
							<th><p>設立年月日</p></th>
							<td><p><?php the_field('company_year'); ?></p></td>
						</tr>
						<tr>
							<th><p>資本金</p></th>
							<td><p><?php the_field('company_capital'); ?></p></td>
						</tr>
						<tr>
							<th><p>事業内容</p></th>
							<td><p><?php the_field('business_name'); ?></p></td>
						</tr>
						<tr>
							<th><p>取引銀行</p></th>
							<td><p><?php the_field('company_bank'); ?></p></td>
						</tr>
						<tr>
							<th><p>従業員数</p></th>
							<td><p><?php the_field('company_employees'); ?></p></td>
						</tr>
						<tr>
							<th><p>主要取引先</p></th>
							<td><p><?php the_field('company_clients'); ?></p></td>
						</tr>
						<tr>
							<th><p>電話番号</p></th>
							<td><p><?php the_field('company_call'); ?></p></td>
						</tr>
						<tr>
							<th><p>FAX番号</p></th>
							<td><p><?php the_field('company_fax'); ?></p></td>
						</tr>
					</table>
				</div>
				<div class="img flex">
					<div>
   	    	    		<img src="<?php echo get_template_directory_uri(); ?>/src/img/company_img02.png" width="500" height="333" alt=""/> 
					</div>
					<div>
   	    		    	<img src="<?php echo get_template_directory_uri(); ?>/src/img/company_img03.png" width="500" height="333" alt=""/>
					</div>
				</div>
			</div>
		</section>
		
		<section id="com_sec03">
			<div class="section_title">
				<h2>沿革</h2>
			</div>
			<div class="sec_main flex_s">
				<div class="timeline-container">
				<ul class="timeline">
				<li><span class="dot"></span><p class="text">2020年4月　個人事業を開始</p></li>
				<li><span class="dot"></span><p class="text">2021年3月　法人化し「株式会社CRAFT SALES」設立</p></li>
				<li><span class="dot"></span><p class="text">2021年8月　本社を東京都千代田区に移転</p></li>
				<li><span class="dot"></span><p class="text">2022年5月　新サービス「営業代行業務」リリース</p></li>
				<li><span class="dot"></span><p class="text">2023年1月　従業員数100名を超える規模へ拡大</p></li>
				<li><span class="dot"></span><p class="text">2024年6月　ウェブサイトをリニューアルオープン</p></li>
				<li><span class="dot last"></span><p class="text">2025年4月　新部署「営業コンサル事業部」立ち上げ</p></li>
				</ul>
				<div class="timeline-image">
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/company_img05.png" width="268" height="402" alt=""/>
				</div>
				</div>
			</div>
			
		</section>
		
		<section id="com_sec04">
			<div class="section_title">
				<h2>アクセス</h2>
			</div>
			<div class="sec_main">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.436044527719!2d139.7477147478994!3d35.683944540345344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0b19763daf%3A0xd8f25ad45d307110!2z44CSMTAwLTAwMDE!5e0!3m2!1sja!2sjp!4v1745381518253!5m2!1sja!2sjp" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<p>所在地：〒100-0001　東京都千代田区千代田1-1-1</p>
			</div>
		</section>
    </main>

<?php
get_footer();
