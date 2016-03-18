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
		<link rel="stylesheet" href="./../../css/Base/normalize.css">
		<link rel="stylesheet" href="./../../css/Base/base.css">
		<link rel="stylesheet" href="./../../css/font-awesome.css">

		<link rel="stylesheet" href="./../../css/layout.css">
		<link rel="stylesheet" href="./../../css/Common/common.css">
		<link rel="stylesheet" href="./../../css/Shop/price.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.php";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/price.php">料金案内</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">

					<h1 class="text_Center">料金案内</h1>

					<section>

						<h2>基本料金</h2>
						<dl>
							<dt>一般</dt>
							<dd>¥1,800</dd>
						</dl>
						<dl>
							<dt>大学生・高校生</dt>
							<dd>¥1,500</dd>
						</dl>
						<dl>
							<dt>中学生・小学生</dt>
							<dd>¥1,200</dd>
						</dl>
						<dl>
							<dt>小学生未満</dt>
							<dd>¥1,000</dd>
						</dl>
						<dl>
							<dt>3歳以下</dt>
							<dd>¥1,500</dd>
						</dl>


					</section>

					<section>

						<h2>割引サービス</h2>
						<dl>
							<dt>
								シニア割引<br/>
								<span class="service_info">※60歳以上の方</span>
							</dt>
							<dd>1,000円</dd>
						</dl>
						<dl>
							<dt>
								夫婦50割引<br/>
								<span class="service_info">
									※どちらかが50歳以上のご夫婦お2人で、同一日時・同作品をご鑑賞の場合
								</span>
							</dt>
							<dd>2,200円</dd>
						</dl>
						<dl>
							<dt>
								カップル割引<br/>
								<span class="service_info">
									※高校生以上のお客様で、同一日時・同作品をご鑑賞の場合
								</span>
							</dt>
							<dd>2,200円</dd>
						</dl>
						<dl>
							<dt>
								レディース割引<br/>
								<span class="service_info">
									※毎週水曜日、女性の方のみご鑑賞いただけます。　
								</span>
							</dt>
							<dd>1,000円</dd>
						</dl>
						<dl>
							<dt>
								障がい者割引<br/>
								<span class="service_info">
									※付き添い1名様まで同料金。障がい者手帳をご提示ください。
								</span>
							</dt>
							<dd>1,100円</dd>
						</dl>



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
