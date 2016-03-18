<?php session_start(); ?>
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
		<link rel="stylesheet" href="../css/Base/normalize.css">
		<link rel="stylesheet" href="../css/Base/base.css">
		<link rel="stylesheet" href="../css/font-awesome.css">

		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/Common/common.css">
		<link rel="stylesheet" href="../css/movies_info.css">

		<link rel="stylesheet" type="text/css" href="../css/plugin/slider-pro.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="../css/examples.css" media="screen"/>

		<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery.sliderPro.min.js"></script>
		<script type="text/javascript">
			$( document ).ready(function( $ ) {
				$( '#example3' ).sliderPro({
					width: 500,
					height: 280,
					fade: true,
					arrows: true,
					buttons: false,
					fullScreen: true,
					shuffle: false,
					smallSize: 500,
					mediumSize: 1000,
					largeSize: 3000,
					thumbnailArrows: true,
					autoplay: false
				});
			});
		</script>

		<script type="text/javascript">

			function change1(){
				//選択中の移動
				$('.b').removeClass('select');
				$('.a').addClass('select');
				$('.b').addClass('nselect');
				$('.a').removeClass('nselect');

				//スタッフの中身を非表示
				$('.staff').removeClass('content');
				$('.staff').addClass('hide');
				//あらすじの中身を表示
				$('.arasuji').removeClass('hide');
				$('.arasuji').addClass('content');
			}

			function change2(){
				//選択中の移動
				$('.a').removeClass('select');
				$('.b').addClass('select');
				$('.a').addClass('nselect');
				$('.b').removeClass('nselect');


				//あらすじの中身を非表示
				$('.arasuji').removeClass('content');
				$('.arasuji').addClass('hide');
				//あらすじの中身を表示
				$('.staff').removeClass('hide');
				$('.staff').addClass('content');
			}




		</script>

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./parts/header.php";
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

					<h1 class="text_Center border_Solid h1color">作品紹介</h1>

					<section class="border_Solid bdcolor">
						<h2 class="border_Solid h2color">オデッセイ</h2>


						<!-- ▼スライド -->
						<div id="example3" class="slider-pro">
							<div class="sp-slides">
								<div class="sp-slide">
									<img class="sp-image" src="../img/mi01.jpg"
										data-src="../img/mi01.jpg"
										data-small="../img/mi01.jpg"
										data-medium="../img/mi01.jpg"
										data-large="../img/mi01.jpg"
										data-retina="../img/mi01.jpg"/>
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="../img/mi02.jpg"
										data-src="../img/mi02.jpg"
										data-small="../img/mi02.jpg"
										data-medium="../img/mi02.jpg"
										data-large="../img/mi02.jpg"
										data-retina="../img/mi02.jpg"/>
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="../img/mi03.jpg"
										data-src="../img/mi03.jpg"
										data-small="../img/mi03.jpg"
										data-medium="../img/mi03.jpg"
										data-large="../img/mi03.jpg"
										data-retina="../img/mi03.jpg"/>
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="../img/mi04.jpg"
										data-src="../img/mi04.jpg"
										data-small="../img/mi04.jpg"
										data-medium="../img/mi04.jpg"
										data-large="../img/mi04.jpg"
										data-retina="../img/mi04.jpg"/>
								</div>

								<div class="sp-slide">
									<img class="sp-image" src="../img/mi05.jpg"
										data-src="../img/mi05.jpg"
										data-small="../img/mi05.jpg"
										data-medium="../img/mi05.jpg"
										data-large="../img/mi05.jpg"
										data-retina="../img/mi05.jpg"/>
								</div>
							</div>

							<div class="sp-thumbnails">
								<img class="sp-thumbnail" src="../img/mi01.jpg"/>
								<img class="sp-thumbnail" src="../img/mi02.jpg"/>
								<img class="sp-thumbnail" src="../img/mi03.jpg"/>
								<img class="sp-thumbnail" src="../img/mi04.jpg"/>
								<img class="sp-thumbnail" src="../img/mi05.jpg"/>
							</div>
						</div>


						<div class="c">
						<ul class="tab">
							<li class="a select" onclick="change1()" >あらすじ・解説</li>
							<li class="b nselect" onclick="change2()">スタッフ・キャスト</li>
						</ul>

						<ul class="content arasuji">
							<h3>あらすじ</h3>
								<li>
									火星での有人探査中に嵐に巻き込まれた宇宙飛行士のマーク・ワトニー（マット・デイモン）。
									乗組員はワトニーが死亡したと思い、火星を去るが、彼は生きていた。空気も水も通信手段もなく、
									わずかな食料しかない危機的状況で、ワトニーは生き延びようとする。一方、NASAは世界中から科学者を
									結集し救出を企て、仲間たちもまた大胆な救出ミッションを敢行しようとしていた。
								</li>

							<h3>解説</h3>
								<li>
									『グラディエーター』などのリドリー・スコットがメガホンを取り、『ボーン』シリーズなどのマット・デイモンが
									火星に取り残された宇宙飛行士を演じるSFアドベンチャー。
									火星で死亡したと思われた宇宙飛行士が実は生きていることが発覚、主人公の必死のサバイバルと彼を助けようとする
									NASAや乗組員たちの奮闘が描かれる。共演は、『ゼロ・ダーク・サーティ』などのジェシカ・チャステインや『LIFE!／ライフ』
									などのクリステン・ウィグなど。スコット監督による壮大なビジュアルや感動的なストーリーに注目。
								</li>
						</ul>
						<ul class="hide staff arasuji">
							<h3>スタッフ</h3>
								<li>
									マット・デイモン、ジェシカ・チャステイン、クリステン・ウィグ、キウェテル・イジョフォー、ジェフ・ダニエルズ、
									マイケル・ペーニャ、ケイト・マーラ、ショーン・ビーン、セバスチャン・スタン、アクセル・ヘニー
								</li>

							<h3>キャスト</h3>
								<li>
									監督： リドリー・スコット、脚本： ドリュー・ゴダード、原作： アンディ・ウィアー、製作： サイモン・キンバーグ、
									製作： マイケル・シェイファー、製作： アディッティヤ・スード、製作： マーク・ハッファム、撮影監督： ダリウス・ウォルスキー、プロダクションデザイナー： アーサー・マックス、編集： ピエトロ・スカリア、音楽： ハリー・グレッグソン＝ウィリアムズ、VFXスーパーバイザー： リチャード・スタマーズ、衣装デザイナー： ジャンティ・イェーツ
								</li>
						</ul>
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
