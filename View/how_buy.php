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
		<link rel="stylesheet" href="./../css/Base/normalize.css">
		<link rel="stylesheet" href="./../css/Base/base.css">
		<link rel="stylesheet" href="./../css/font-awesome.css">

		<link rel="stylesheet" href="./../css/layout.css">
		<link rel="stylesheet" href="./../css/Common/common.css">
		<link rel="stylesheet" href="./../css/how_buy.css">


	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="http://127.0.0.1/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/halcinema/View/how_buy.php">購入方法</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">

						<h1 class="how_buy_title">購入方法</h1>

						<section class="how_buy_step">
							<h3>上映日時を選ぶ</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy01.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										上映日付を確認し
									</p>
									<p>
										見たい上映時間をクリック
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>


						<section class="how_buy_step">
							<h3>ステップ１</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy02.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										購入する枚数を選択してください。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>

						<section class="how_buy_step">
							<h3>ステップ２</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy03.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										座席を選択してください。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>

						<section class="how_buy_step">
							<h3>ステップ３</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy04.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										支払い方法を選択してください。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>

						<section class="how_buy_step">
							<h3>ステップ４</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy05.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										お客様の情報を入力してください。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>


						<section class="how_buy_step">
							<h3>ステップ５</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy06.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										お支払い方法を入力してください。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>


						<section class="how_buy_step">
							<h3>ステップ６</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy07.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										入力内容のご確認。
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>

						<section class="how_buy_step">
							<h3>ステップ７</h3>
							<div class="float_C">
								<div class="float_L how_buy_image">
									<img src="../img/how_buy08.jpg" alt="画像" />
								</div>
								<div class="float_L how_boy_content">
									<p>
										完了画面
									</p>
								</div><!-- /.float_L -->
							</div>
						</section>

				</article>
				<!-- ▲左コンテンツ -->
				<!-- ▼右コンテンツ -->
<?php
	require_once "./parts/right_side.html";
?>
				<!-- ▲右コンテンツ -->

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
