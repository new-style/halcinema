<header class="l-header">
	<!-- ロゴなど -->
	<div class="l-Lheader">
		<a href="http://127.0.0.1/halcinema/View/Shop/shop_index.php">
			<img src="http://127.0.0.1/halcinema/img/logo.png" alt="HALシネマ TOKYO" class="logo_Small">
		</a>
		<a href="#">
			<img src="http://127.0.0.1/halcinema/img/dummy_y.png" alt="広告バナー">
		</a>
	</div>

	<div class="l-Rheader">
		<div class="l-R-Theader">
			<a href="http://127.0.0.1/halcinema/View/Shop/access.php">アクセス</a>
			<a href="http://127.0.0.1/halcinema/View/how_buy.php">購入方法</a>
			<a href="http://127.0.0.1/halcinema/View/faq.php">よくある質問</a>
		</div>

		<ul class="l-R-Bheader">
			<?php
			$sid = 0;
			if(!isset($_SESSION['id'])){
				$sid = 1;
			}
				if($sid != 1){
					echo '<li>'.$_SESSION['name'].'</li>';
					echo '<li><a href="http://127.0.0.1/halcinema/View/Member/mypage.php">マイページ</a></li>';
				}else{
					echo '<li><a href="http://127.0.0.1/halcinema/View/Adduser/step1.php">新規会員登録</a></li>';
					echo '<li><a href="http://127.0.0.1/halcinema/View/login.php">ログイン</a></li>';
				}
			?>
			
		</ul>
	</div>
</header>

<nav>
	<ul class="l-nav">
		<li><a href="http://127.0.0.1/halcinema/View/Shop/shop_index.php">HOME</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Shop/schedule.php">上映スケジュール</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Shop/now_movies.php">公開中作品一覧</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Shop/coming_movies.php">公開予定作品</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Shop/price.php">料金案内</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Shop/facility.php">施設情報</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/contact.php">お問い合わせ</a></li>
	</ul>
</nav>
