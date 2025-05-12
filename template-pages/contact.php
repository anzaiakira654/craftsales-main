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
 * Template Name:contact
 */

get_header();
?>
    <main>
        <section id="con_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/contact_FV.png');">
			<div class="text">
				<h2>Contact</h2>
			</div>
		</section>

		<section id="con_sec01">
			<div class="con_box">
				<p class="message">お問い合わせのご連絡は<br class="pc_none">下記までお願いいたします。</p>
				<div class="con_call flex">
					<div class="img">
	    	    		<img src="img/contact_img01.png" width="89" height="89" alt=""/>
					</div>
					<div class="text">
						<p>電話　：000-1234-5678<br>ＦＡＸ：000-1234-5678</p>
					</div>
				</div>
			</div>
			<div class="con_box">
				<form class="contact-form" id="contactForm">
					<p class="con_p01">ご相談・お問い合わせは以下の必要事項を入力の上、お問い合わせください。</p>
					<div class="form-group radio-group flex_s">
						<label>ご用件 <span class="required">必須</span></label>
						<label><input type="radio" name="subject" required> サービスについて</label>
						<label><input type="radio" name="subject"> 求人について</label>
						<label><input type="radio" name="subject"> その他</label>
					</div>

					<div class="form-group flex_s">
						<label>会社名 <span class="optional">任意</span></label>
						<input type="text" placeholder="株式会社CRAFT SALES">
					</div>

					<div class="form-group flex_s">
						<label>お名前 <span class="required">必須</span></label>
						<input type="text" required placeholder="山田太郎">
					</div>

					<div class="form-group flex_s">
						<label>郵便番号 <span class="optional">任意</span></label>
						<input type="text" placeholder="100-0001">
					</div>

					<div class="form-group flex_s">
						<label>住所 <span class="optional">任意</span></label>
						<input type="text" placeholder="東京都千代田区千代田1-1-1">
					</div>

					<div class="form-group flex_s">
						<label>電話番号 <span class="required">必須</span></label>
						<input type="text" required placeholder="000-1234-5678">
					</div>

					<div class="form-group flex_s">
						<label>メールアドレス <span class="required">必須</span></label>
						<input type="email" required placeholder="xxxxx@example.com">
					</div>

					<div class="form-group flex_s">
						<label>メールアドレス（確認用） <span class="required">必須</span></label>
						<input type="email" required placeholder="xxxxx@example.com">
					</div>

					<div class="form-group flex_s">
						<label>お問い合わせ内容 <span class="required">必須</span></label>
						<textarea required placeholder="こちらにお問い合わせ内容をご記入ください。"></textarea>
					</div>

					<div class="checkbox-group">
						<label><input type="checkbox" required> <a href="#" class="check_a">個人情報保護方針</a> に同意の上<br class="pc_none">送信します。</label>
					</div>

					<button type="submit" class="submit-btn">送信する</button>
				</form>
			</div>
		</section>

    </main>

<?php
get_footer();
