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
		<link rel="stylesheet" href="./../../css/Shop/facility.css">

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

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">

					<h1 class="text_Center border_Solid">施設案内</h1>

<?php
	for( $loop = 1; $loop <= 7; $loop++){
?>
					<section class="float_C">

						<h2>スクリーン<?php echo $loop; ?></h2>
						<div class="screen">
							<img src="" alt="" class="float_L"/>
							<p class="float_L">
								シート数、
								音響、
								スクリーンサイズ
							</p>
						</div>

					</section>
<?php
	}
?>

				</article>
				<!-- ▲左コンテンツ -->
				<!-- ▼右コンテンツ -->
<?php
	require_once "./../parts/right_side.html";
?>
				<!-- ▲右コンテンツ -->

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
