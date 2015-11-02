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
		<link rel="stylesheet" href="../../css/plugin/lightbox.css">

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
<?php
	// for( $loop = 1; $loop <= 7; $loop++){
?>
					<section class="theater_Facillity float_C">
						<div class="theater_H1">
							<span>Theater Facillity</span>
							<h1>施設紹介</h1>
						</div>		
						<hr>
						<img src="../../img/image02.png" height="190" width="290">
						<img src="../../img/image01.png" height="190" width="290">
						<p>
						海外で人気を集めている映画館が10月、日本に上陸しました。<br>そのクォリティーを完全再現したHALCinemaはお客様に最高の空間と時間を提供いたします。
						</p>
						<hr>
					</section>

					<section class="room_Facilities">

						<div class="room_H2">
							<span>Room Facilities</span>
							<h2>館内設備</h2>
						</div>

						<div class="ticket_Room float_C">
							<img src="../../img/image03.png" height="135" width="200" alt="" class="float_L">
							<div class="ticket_Room_Text float_L">
								<h3>スムーズなチケット購入</h3>
								<p>
									モニターに映し出された空席状況を見ながら、<br>お客様に最適な座席をお選びいただけます。
								</p>
							</div>
						</div>
						<div class="main_Room float_C">
							<img src="../../img/image04.png" height="135" width="200" alt="" class="float_L">
							<div class="main_Room_Text float_L">
								<h3>魅力あるメインロビー</h3>
								<p>本館のイメージを感じることのできるロビーにはフードメニューはもちろんカフェメニューも充実しており、映画が始まる前のひと時をゆっくりと楽しんでいただけます。</p>
							</div>
						</div>
						<div class="sound_Room float_C">
						<img src="../../img/image05.png" height="135" width="200" alt="" class="float_L">
						<div class="sound_Room_Text float_L">
							<h3>世界最高峰の豪華なサウンドシステム</h3>	
							<p>コンサート会場で使用される特殊な大容量スピーカーをサラウンドスピーカーとして贅沢に配置。<br>会話シーンの明瞭性、アクションシーンの重低音など最高レベルの音響でお楽しみください。</p>
						</div>
						</div>
					</section>

					<section class="room_Layout">
						
						<div class="layout_H2">
				
							<span>Room Layout</span>
							<h2>館内レイアウト</h2>
						</div>

						<div class="screen_6F float_C">
							<p>6F</p>
							<a href="../../img/sampleScreen.png" data-lightbox="image-5" data-title="スクリーン5"><img src="../../img/screen05.png" alt=""></a>
							<a href="../../img/sampleScreen.png" data-lightbox="image-6" data-title="スクリーン6"><img src="../../img/screen06.png" alt=""></a>
						</div>
						<div class="screen_5F float_C">
							<p>5F</p>
							<a href="../../img/sampleScreen.png" data-lightbox="image-3" data-title="スクリーン3"><img src="../../img/screen03.png" alt=""></a>
							<a href="../../img/sampleScreen.png" data-lightbox="image-4" data-title="スクリーン4"><img src="../../img/screen04.png" alt=""></a>
						</div>
						<div class="screen_4F float_C">
							<p>4F</p>
							<a href="../../img/sampleScreen.png" data-lightbox="image-1" data-title="スクリーン1"><img src="../../img/screen01.png" alt=""></a>
							<a href="../../img/sampleScreen.png" data-lightbox="image-2" data-title="スクリーン2"><img src="../../img/screen02.png" alt=""></a>
						</div>
						<div class="screen_3F float_C">
							<p>3F</p>
							<a href="#"><img src="../../img/ticket.png" height="30" width="94" alt=""></a>
							<a href="#"><img src="../../img/online.png" height="30" width="94" alt=""></a>
							<a href="#"><img src="../../img/food.png" height="30" width="94" alt=""></a>
						</div>

						<table>
							<tr>
								<td>スクリーン</td>
								<td>座席数+車椅子スペース</td>
								<td>スクリーンサイズ</td>
								<td>音響</td>
							</tr>

							<tr>
								<td>SCREEN 1</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
							<tr>
								<td>SCREEN 2</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
							<tr>
								<td>SCREEN 3</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
							<tr>
								<td>SCREEN 4</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
							<tr>
								<td>SCREEN 5</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
							<tr>
								<td>SCREEN 6</td>
								<td>54 + 2</td>
								<td>22.6 × 9.5 (m)</td>
								<td>デジタル 5.1ch</td>
							</tr>
						</table>

					</section>
<?php
	// }
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
		<script src="../../js/jquery-1.11.0.min.js"></script>
		<script src="../../js/lightbox.js"></script>
	</body>
</html>
<!-- ▲表示▲ -->
