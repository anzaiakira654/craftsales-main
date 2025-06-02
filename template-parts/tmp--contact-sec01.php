<section id="con_sec01">
	<div class="con_box">
		<p class="message">お問い合わせのご連絡は<br class="pc_none">下記までお願いいたします。</p>
		<div class="con_call flex">
			<div class="img">
				<img src="<?php the_field('contact_img01'); ?>" >
			</div>
			<div class="text">
				<p>電話　：<?php the_field('field_6823ff68a3a17' , 'company_call'); ?><br>ＦＡＸ：<?php the_field('field_6823ff83a3a18' , 'company_fax'); ?></p>
			</div>
		</div>
	</div>
	

	<div class="con_box">
		<div class="contact-form" id="contactForm">
			<p class="con_p01">ご相談・お問い合わせは以下の必要事項を入力の上、お問い合わせください。</p>
			
			<?php echo do_shortcode('[contact-form-7 id="e862c6c" title="コンタクトフォーム 1"]'); ?>
		</div>
	</div>
</section>