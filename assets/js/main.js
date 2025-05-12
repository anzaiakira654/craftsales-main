// ハンバーガーメニューの追加関数
document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav_sp');
  const navLinks = document.querySelectorAll('.nav a'); // ナビゲーション内のすべてのリンク

  // ハンバーガーメニューの開閉を切り替える関数
  function toggleMenu() {
    nav.classList.toggle('active');
  }

  // メニューを閉じる関数
  function closeMenu(event) {
    if (!nav.contains(event.target) && !hamburger.contains(event.target)) {
      nav.classList.remove('active');
    }
  }

  // ハンバーガーメニューのクリックイベント
  hamburger.addEventListener('click', function (event) {
    event.stopPropagation(); // クリックイベントが他に伝播しないようにする
    toggleMenu();
  });

  // ナビゲーションリンクをクリックしたときにメニューを閉じる
  navLinks.forEach(link => {
    link.addEventListener('click', function () {
      nav.classList.remove('active');
    });
  });

  // ドキュメント全体のクリックイベント
  document.addEventListener('click', closeMenu);
});

document.querySelectorAll('details').forEach(details => {
  details.addEventListener('toggle', () => {
    console.log(`${details.className} is now ${details.open ? 'open' : 'closed'}`);
  });
});

$(function() {
  // 変数にクラスを入れる
  var btn = $('.button01');
  
  //スクロールしてページトップから100に達したらボタンを表示
  $(window).on('load scroll', function(){
    if($(this).scrollTop() > 500) {
      btn.addClass('active');
    }else{
      btn.removeClass('active');
    }
  });

});
