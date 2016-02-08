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
		<link rel="stylesheet" href="./../../css/Shop/comming_movies.css">
		<link rel="stylesheet" href="../../css/Shop/access.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="#">HOME</a></li>
					<li><a href="#"></a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">

					<h1 class="access_Title">アクセス</h1>

					<div class="text_Center access_Map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4099142430905!2d139.6968724!3d35.691529100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd6981dce11%3A0xee411b3fa3fc9f13!2zSEFM5p2x5Lqs!5e0!3m2!1sja!2sjp!4v1435555841378" width="590" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<section>
						<h3 class="tanpo_Title">店舗情報</h3>

						<div class="tenpo_Info">
							<p>
								ＨＡＬシネマ東京<br/>
								〒160-0023　東京都新宿区西新宿1-7-3
							</p>

							<h3>最寄り駅からのアクセス</h3>
							<p>
								新宿（西口）駅前、徒歩３分。<br/>
								JR・小田急・京王・地下鉄から地下街が直結。<br/>
								駅前から歩道橋が直結。
							</p>

							<h3>交通アクセス</h3>
							<p>
								■ 東京駅／JR中央線（14分）→新宿駅<br/>
								■ 上野駅／JR山手線（24分）→新宿駅<br/>
								■ 羽田空港／京急空港線快特（17分）→品川駅／JR山手線（19分）→新宿駅<br/>
							</p>
						</div>
					</section>
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
