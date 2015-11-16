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
		<link rel="stylesheet" href="./../css/faq.css">

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
					<li><a href="http://127.0.0.1/halcinema/View/faq.php">よくある質問</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼左コンテンツ -->
				<article>
					<h1 class="page-Title">よくある質問</h1>

					<div class="many-Faq-Box">
						<h2 class="faq-Title"><span>最近多いご質問</span></h2>
						<p class="expo">お客様から最近寄せられたご質問を掲載しております。</p>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>会員登録について教えてください</p>
						</div>
						<div class="answer-Box">
							<p>会員登録するには右上の新規登録ボタンからご登録してください。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>ログインについて教えてください</p>
						</div>
						<div class="answer-Box">
							<p>ログインするには右上のログインボタンからログインしてください。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>予約について教えてください</p>
						</div>
						<div class="answer-Box">
							<p>予約するには頑張っていただきますよう、お願い申し上げます。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>料金について教えてください</p>
						</div>
						<div class="answer-Box">
							<p>料金につきましては、上の「料金案内」のページをご確認ください。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>支払い方法について教えてください</p>
						</div>
						<div class="answer-Box">
							<p>お支払い方法はお金でご購入いただくようお願いいたします。</p>
						</div>

					</div><!-- many-Faq-Boxおわり -->

					<div class="hot-Faq-Box">
						<h2 class="faq-Title"><span>注目FAQ</span></h2>
						<p class="expo">テキストが入ります。テキストが入ります。テキストが入ります。</p>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>施設について教えてください。</p>
						</div>
						<div class="answer-Box">
							<p>施設につきましては、上の「施設情報」にページをご覧ください。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>施設について教えてください。</p>
						</div>
						<div class="answer-Box">
							<p>施設につきましては、上の<a href="#">「施設情報」</a>にページをご覧ください。</p>
						</div>

						<div class="question-Box">
							<p><span class="faq-Icon-On"></span>施設について教えてください。</p>
						</div>
						<div class="answer-Box">
							<p>施設につきましては、上の「施設情報」にページをご覧ください。</p>
						</div>

					</div>



				</article>
				<!-- ▲左コンテンツ -->

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./parts/footer.html";
?>
		</div>
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/faq.js"></script>
	</body>
</html>
<!-- ▲表示▲ -->
