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
		<!-- CSS読み込み -->
		<link rel="stylesheet" href="../css/Base/normalize.css">
		<link rel="stylesheet" href="../css/Base/base.css">
		<link rel="stylesheet" href="../css/font-awesome.css">

		<link rel="stylesheet" href="../css/layout.css">
		<link rel="stylesheet" href="../css/Common/common.css">
		<!-- JS読み込み -->

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "parts/header.php";
?>

<main class="l-content">
	<!-- ▼コンテンツ -->
	<article class="border_Solid">

			<p class="msg margin_Auto text_Center Bold">チケットの購入が完了しました。</p>
	</article>
	<!-- ▲コンテンツ -->
</main>


		<!-- ▼フッター -->
<?php
	require_once "parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
