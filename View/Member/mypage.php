<!-- ▼表示▼ -->
<!DOCTYPE html>
<html lang="ja">
	<head>
		<title></title>
		<!-- 定義 -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="content-style-type" content="text/css">
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<!-- 読み込み -->
		<link rel="stylesheet" href="./../../css/Base/normalize.css">
		<link rel="stylesheet" href="./../../css/Base/base.css">
		<link rel="stylesheet" href="./../../css/font-awesome.css">

		<link rel="stylesheet" href="./../../css/layout.css">
		<link rel="stylesheet" href="./../../css/Common/common.css">
		<link rel="stylesheet" href="./../../css/Member/mypage.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadclumb">
					<li><a href="#">HOME</a></li>
					<li><a href="#"></a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

					<h1 class="text_Center border_Solid">マイページ</h1>

					<h2>予約履歴・購入履歴</h2>
					<div class="info_Box">
						<a href="reserve_history.php">予約履歴</a>
						<a href="buy_history.php">購入履歴</a>
					</div>

					<h2>ユーザ登録情報</h2>
					<div class="info_Box">
						<a href="setting.php">基本情報</a>
						<a href="#">クレジット情報</a>
					</div>

					<h2>お気に入りリスト</h2>
					<div class="info_Box">

					</div>

					<h2>ポイント</h2>
					<div class="info_Box">
						X ポイント
						<a href="#">ポイント履歴</a>
					</div>

					<h2>シネマズマガジン</h2>
					<div class="info_Box">

					</div>

					<h2>キャンペーン情報</h2>
					<div class="info_Box">

					</div>

				</article>
				<!-- ▲コンテンツ -->

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
