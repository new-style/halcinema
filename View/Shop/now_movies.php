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
		<link rel="stylesheet" href="../../css/Base/normalize.css">
		<link rel="stylesheet" href="../../css/Base/base.css">
		<link rel="stylesheet" href="../../css/font-awesome.css">

		<link rel="stylesheet" href="../../css/Shop/now_movies.css">
		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ヘッダー -->
<?php
	require_once "../parts/header.html";
?>

			<main class="l-content">
				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
						<li><a href="">HOME</a></li>
				</ul>
				<!-- ▲パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">
					<h1 class="text_Center">公開中の作品一覧</h1>

<?php
	for( $loop = 0; $loop < 9; $loop++ ){
?>

						<section class="float_C border_Solid">
							<a href="#" class="link_None"><h3>作品タイトル</h3>
							<img src="" alt="作品タイトル" class="float_L"/></a>
							<div class="info">
								<p>
									aaaaaaaaaaaaaaaaaaaaaaaa
								</p>
							</div>
						</section>
<?php
}
?>

				</article>
				<!-- ▲左コンテンツ -->
<?php
	require_once "../parts/right_side.html";
?>
			</main>

 <!-- フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
