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
		<!-- CSS読み込み -->
		<link rel="stylesheet" href="../../css/Base/normalize.css">
		<link rel="stylesheet" href="../../css/Base/base.css">
		<link rel="stylesheet" href="../../css/font-awesome.css">

		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">
    <link rel="stylesheet" href="../../css/Adduser/step1.css">
		<!-- JS読み込み -->

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "../parts/header.html";
?>



<main class="l-content">
	<!-- ▼パンくずリスト -->
	<ul class="l-breadcrumb">
		<li><a href="#">HALシネマ</a></li>
		<li><a href="#">会員登録確認</a></li>
	</ul>
	<!-- ▲パンくずりす -->

	<!-- ▼ステップバー -->
	<ul class="stepBar step3">
			<li class="step btn">Step1<span>購入枚数と座席<br/>を選択してください。</span></li>
			<li class="step current btn">Step2<span>お客様情報とお支払情報<br/>を入力してください。</span></li>
			<li class="step btn">Step3<span>購入内容のご確認</span></li>
	</ul>
	<!-- ▲ステップバー -->

	<!-- ▼コンテンツ -->

	<article>
			<h1>会員登録確認</h1>

	<article class="border_Solid">
		<div class="title_Box text_Center border_Solid">
			<h1>Step2</h1>
			<p>お客様情報のご確認</p>
		</div>
		<form action="../complete.php" method="post">
			<fieldset>
				<legend class="text_Center">会員情報</span></legend>
			</fieldset>


			<fieldset>
				<legend class="text_Center">お支払情報</span></legend>
			</fieldset>


			<!-- ボタン -->
			<div class="">
				<button type="submit">戻る</button>
				<button type="submit">登録する</button>
			</div>

		</form>
	</article>
	<!-- ▲コンテンツ -->
</main>


		<!-- ▼フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
