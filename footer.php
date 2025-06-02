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
				<?php the_field('field_6822efe9820b9' , 'company_name'); ?><br>
				<?php the_field('field_6823f465bb68d' , 'company_address'); ?><br>
				<?php the_field('field_6823ff68a3a17' , 'company_call'); ?><br>
				<?php the_field('field_6823ff83a3a18' , 'company_fax'); ?>
				</p>
				<div class="button_icon">
					<a href="index.html">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/icon01.png" width="48" height="48" alt=""/>
					</a>
				</div>
			</div>
			<div class="wid02 flex">
				<div class="wid03">
				<!--
					<nav id="site-navigation" class="main-navigation nav_pc">
						<?php
							/*$pages = get_pages( array( 'sort_column' => 'ID', 'sort_order' => 'asc' ) );
							foreach ( $pages as $page ) {
								$current = ( get_the_ID() == $page->ID ) ? ' class="current_page_item"' : '';
								echo '<li class="page_item page-item-' . $page->ID . '"' . $current . '>';
								echo '<a href="' . get_permalink( $page->ID ) . '">' . esc_html( $page->post_title ) . '</a>';
								echo '</li>';
							}*/
						?>
					</nav>
				-->
					<!-- #site-navigation -->
					<nav id="site-navigation" class="main-navigation nav_pc">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_id'        => 'footer-menu',
								'menu_class'     => 'nav_menu',
								'container'      => false,
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="wid03">
					<?php
						$page = get_post(21); // 固定ページID
						if ($page) {
							echo '<li class="page_item page-item-' . $page->ID . '">';
							echo '<a href="' . get_permalink($page->ID) . '">' . esc_html($page->post_title) . '</a>';
							echo '</li>';
						}
					?>
					<?php
						$page_id = 21;
						$base_url = get_permalink($page_id);
					?>
					<li class="page_item page-item-<?php echo $page_id; ?>">
						<a href="<?php echo esc_url($base_url . '#biz_sec02-1'); ?>"><p>法人向け営業代行業務</p></a>
					</li>
					<li class="page_item page-item-<?php echo $page_id; ?>">
						<a href="<?php echo esc_url($base_url . '#biz_sec02-2'); ?>"><p>営業コンサルティング</p></a>
					</li>
					<li class="page_item page-item-<?php echo $page_id; ?>">
						<a href="<?php echo esc_url($base_url . '#biz_sec02-3'); ?>"><p>テレアポ支援</p></a>
					</li>
					<li class="page_item page-item-<?php echo $page_id; ?>">
						<a href="<?php echo esc_url($base_url . '#biz_sec02-4'); ?>"><p>営業研修・人材育成</p></a>
					</li>
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
