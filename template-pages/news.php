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
 * Template Name:news
 */

get_header();
?>
    <main>
        <section id="new_FV" class="FV_2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/news_FV.png');">
			<div class="text">
				<h2>NEWS</h2>
			</div>
		</section>
		<!--
		<section id="new_sec01">
			<div  class="sec_main">
				<div class="section_title">
					<h2>NEWS</h2>
				</div>
				<div class="sec05">
					<div class="sec05_news">
						<a href="#" class="flex">
							<p class="sec05_p01">2025/04/16</p>
							<p class="sec05_p02">お知らせ内容</p>
							<p class="sec05_p03">＞</p>
						</a>
					</div>
					<div class="sec05_news">
						<a href="#" class="flex">
							<p class="sec05_p01">2025/04/16</p>
							<p class="sec05_p02">お知らせ内容</p>
							<p class="sec05_p03">＞</p>
						</a>
					</div>
					<div class="sec05_news">
						<a href="#" class="flex">
							<p class="sec05_p01">2025/04/16</p>
							<p class="sec05_p02">お知らせ内容</p>
							<p class="sec05_p03">＞</p>
						</a>
					</div>
				</div>
				<div class="button">
					<a href="index.html#top_sec05">
						<p class="button-text">一覧を見る　＞</p>
					</a>
				</div>
			</div>
		</section>-->
		
		<section id="new_sec01">
			<div class="news-list" id="newsList">
			<!-- JavaScriptで挿入 -->
			</div>

			<div class="pagination" id="pagination">
			<!-- JavaScriptで挿入 -->
			</div>
		</section>

		<script>
		const newsData = [
			{ date: "2025/04/18", content: "配送エリア拡大のお知らせ", url: "news/news11.html" },
			{ date: "2025/04/16", content: "ゴールデンウィーク休業のお知らせ", url: "news/news10.html" },
			{ date: "2025/04/10", content: "新サービス『〇〇配送プラン』開始", url: "news/news09.html" },
			{ date: "2025/04/05", content: "ホームページをリニューアルしました", url: "news/news08.html" },
			{ date: "2025/03/28", content: "採用情報を更新しました", url: "news/news07.html" },
			{ date: "2025/03/20", content: "物流業界展示会に出展します", url: "news/news06.html" },
			{ date: "2025/03/12", content: "臨時メンテナンスのお知らせ", url: "news/news05.html" },
			{ date: "2025/03/01", content: "配送エリア拡大のお知らせ", url: "news/news04.html" },
			{ date: "2025/02/25", content: "冬季繁忙期の対応について", url: "news/news03.html" },
			{ date: "2025/02/10", content: "サポート窓口の電話番号が変わります", url: "news/news02.html" },
			{ date: "2025/01/30", content: "年末年始休業のお知らせ", url: "news/news01.html" }
		];

		const itemsPerPage = 10;
		const totalPages = Math.ceil(newsData.length / itemsPerPage);
		const newsList = document.getElementById("newsList");
		const pagination = document.getElementById("pagination");

		function renderPage(page) {
		  // ニュースを表示
		  const start = (page - 1) * itemsPerPage;
		  const end = start + itemsPerPage;
		  const items = newsData.slice(start, end);

			
		newsList.innerHTML = items.map(item => `
		  <div class="news-item">
			<a href="${item.url}" style="display: flex; justify-content: space-between; text-decoration: none; color: inherit;">
			  <div>${item.date}</div>
			  <div>${item.content}</div>
			</a>
		  </div>
		`).join("");

		  // ページネーションを表示
		  let paginationHTML = "";
		  for (let i = 1; i <= totalPages; i++) {
			if (i === page) {
			  paginationHTML += `<span class="active">${i}</span>`;
			} else if (i <= 3 || i > totalPages - 1 || Math.abs(page - i) <= 1) {
			  paginationHTML += `<button onclick="renderPage(${i})">${i}</button>`;
			} else if (!paginationHTML.endsWith("…")) {
			  paginationHTML += `<span>…</span>`;
			}
		  }
		  pagination.innerHTML = paginationHTML;
		}

		// 初期表示
		renderPage(1);
		</script>
    </main>


<?php
get_footer();
