<?php
  session_start();



?>

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
		<link rel="stylesheet" href="../.././css/Bace/normalize.css">
		<link rel="stylesheet" href="../.././css/Bace/base.css">
		<link rel="stylesheet" href="../.././css/layout.css">
		<link rel="stylesheet" href="../.././css/Common/common.css">
		<link rel="stylesheet" href="../../css/Member/setting.css">

		<title>ユーザー情報変更</title>
	</head>
	<body>
		<main>
			<article class="l-wrapper">
<?php
	require_once "./../parts/header.php";
?>

				<section class="l-stepHead">
					<h1>ユーザー情報変更</h1>
				</section>
				<section>
					<h2 style="text-align: center;line-height: 300px">変更が完了しました。</h2>
					<p  style="text-align: center;"><a href="setting.php" style="color: #fff;text-decoration: none;">トップに戻る</a></p>
				</section>
			</article>
		</main>
<!-- ▼フッター -->
<?php
	require_once "../parts/footer.html";
?>


	</body>
</html>
<!-- ▲表示▲ -->
