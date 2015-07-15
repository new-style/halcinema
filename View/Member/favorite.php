<!-- ▼表示▼ -->
<!DOCTYPE html>
<html lang="ja">
	<head>
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
    <link rel="stylesheet" href="./../../css/Member/favorite.css">

		<title></title>
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
					<li><a href="#">マイページ</a></li>
					<li><a href="#">購入履歴</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

					<h1 class="text_Center border_Solid">お気に入りリスト</h1>

					<div class="l-content">

						<aside class="l-content_Left">
							<ul class="local_Navi">
								<li>ジャンル一覧</li>
								<li><a href="#">洋画</a></li>
								<li><a href="#">邦画</a></li>
								<li><a href="#">アニメ</a></li>
								<li><a href="#">音楽</a></li>
								<li><a href="#">すべてのジャンル</a></li>
							</ul>
						</aside>


						<div class="l-content_Right">
							<ul class="local_breadclumb">
								<li><a href="#">ジャンル</a></li>
								<li><a href="#">カテゴリー</a></li>
							</ul>


							<section>

								<div class="float_C">
									<img class="float_L" src="" alt="wryyy" />
									<div class="float_R">

										<h3>タイトル</h3>
										<ul class="">
											<li><a href="#">タグ</a></li>
											<li><a href="#">タグ</a></li>
											<li><a href="#">タグ</a></li>
										</ul>
										<p>公開日:</p>
										<p>鑑賞:</p>
										<p>評価:</p>
									</div>
								</div>

								<div class="">
									<p>
										作品情報
									</p>
								</div>

							</section>
						</div>

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
