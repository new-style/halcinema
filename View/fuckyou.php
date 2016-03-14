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
		<link rel="stylesheet" href="./../css/contact.css">

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
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HOME</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/contact.php">お問い合わせ</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

						<h1>お問い合わせ</h1>

						<section class="wait">
							<h2>退会</h2>
							<form action="fuckyou_remove.php" method="post">
							<p>
								パスワードを入力してください。
							</p>
							<input type="password" name="password">


						</section><!-- /.faq_each_link -->

								<div class="button">
									<p>入力内容に間違いがなければ｢送信する｣ボタンをクリックしてください。</p>
									<button type="submit" class="btn btn_Regular">送信する</button>
								</div><!-- /.button -->

							</form>
						</section><!-- /.contact -->

				</article>

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
