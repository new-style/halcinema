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

		<link rel="stylesheet" href="../../css/Shop/schedule.css">
		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ヘッダー -->
<?php
	require_once "./../parts/header.html";
?>

			<main class="l-content">
				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
						<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HOME</a></li>
				</ul>
				<!-- ▲パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">
					<h1>上映スケジュール</h1>

					<!-- ▼日付選択 -->
					<div class="day_Select float_C">

						<a href="#" class="float_L"><i class="fa fa-angle-left"></i></a>
						<ul class="">
<?php
	for( $i=0;$i<7;$i++ ){
?>
							<li><a href="#">日付</a></li>
<?php
	}
?>
						</ul>
						<a href="#" class="float_R"><i class="fa fa-angle-right"></i></a>

					</div>
					<!-- ▲日付選択 -->

					<!-- ▼作品表示 -->
					<div class="schedule">
						<h2 class="text_Center">mm/ddの上映スケジュール</h2>

						<!-- ▼スケジュール -->
						<section class="float_C">
							<a href="../movies_info.php"><h3>作品タイトル</h3>
							<img src="" alt="作品タイトル" class="float_L"></a>
							<!-- ◎→余裕あり △→あと少し ×→なし -->
							<ul class="float_C text_Center">
								<li><a href="../Reserve/step1.php"><div class="day_Time">hh:mm<br/>～<br/>hh:mm</div><div class="reserve_Ok">◎予約購入</div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time">hh:mm<br/>～<br/>hh:mm</div><div class="reserve_Early">△予約購入</div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time">hh:mm<br/>～<br/>hh:mm</div><div class="reserve_No">×予約購入</div></a></li>
							</ul>
						</section>
						<!-- ▲スケジュール -->

					</div>
					<!-- ▲作品表示 -->
				</article>
				<!-- ▲左コンテンツ -->
<?php
	require_once "./../parts/right_side.html";
?>
			</main>

 <!-- フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
