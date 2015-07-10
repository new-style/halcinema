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
		<link rel="stylesheet" href="./../../css/Member/reserve_history.css">

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

					<h1 class="text_Center border_Solid">購入履歴</h1>

					<div class="order float_C">
						<dl>
							<dt>購入日時:</dt>
							<dd>yyyy/mm/dd hh:mm:ss</dd>
						</dl>
						<dl>
							<dt>合計:</dt>
							<dd>XXXX円</dd>
						</dl>
						<dl>
							<dt>注文番号:</dt>
							<dd>0000-1111-2222-3333</dd>
						</dl>
					</div>

					<div class="payment float_C">
						<dl>
							<dt>支払方法：</dt>
							<dd>クレジット　　　<a href="#"><i class="fa fa-angle-right"></i>詳細を見る</a></dd>
						</dl>
					</div>


					<section class="tickets">
							<h2>チケット</h2>
							<div class="tickets_contents float_C">
								<h3><a href="#">作品名</a></h3>
								<img class="float_L" src="" alt="作品名" />

								<div class="tickets_info float_L float_C">
									<dl>
										<dt>上映日時：</dt>
										<dd>yyyy/mm/dd(w) hh:mm～hh:mm</dd>
									</dl>
									<dl>
										<dt>スクリーン：</dt>
										<dd><a href="#">X</a></dd>
									</dl>
									<dl>
										<dt>シート番号</dt>
										<dd><a href="#">A-2</a></dd>
									</dl>
									<dl>
										<dt>購入枚数：</dt>
										<dd>2枚</dd>
									</dl>

									<table>
										<thead>
											<tr>
												<th>券種</th>
												<th>枚数</th>
												<th>価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>一般</td>
												<td>1枚</td>
												<td>1500円</td>
											</tr>
											<tr>
												<td>中学生</td>
												<td>1枚</td>
												<td>1300円</td>
											</tr>
										</tbody>
									</table>
								</div><!-- tickets_info -->
							</div><!-- tickets_content -->

							<p class="text_Right">
								小計金額：2,800円
							</p>
					</section><!-- tickets -->


					<section class="goods">
							<h2>購入グッズ</h2>
							<p>
								商品受け取り方法：劇場受け取り
								状況：未受け取り
							</p>
							<div class="goods_info float_C">
								<img class="float_L" src="" alt="商品名" />
								<table>
									<thead>
										<tr>
											<th>商品名</th>
											<th>個数</th>
											<th>単価</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>XXXXXXXX</td>
											<td>1</td>
											<td>880円</td>
										</tr>
									</tbody>
								</table>
							</div><!-- goods_info -->

							<p class="text_Right">
								小計金額：X,XXX円
							</p>
					</section>

					<p class="text_Right">
						合計金額：X,XXX円
					</p>
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
