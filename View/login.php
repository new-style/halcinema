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

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./parts/header.html";
?>

			<main class="l-content">

				<!-- ▼コンテンツ -->
				<article>
					<form action="" method="post">
						<input type="text" name="user_id" value="">
						<input type="password" name="password" value="">

						<button type="submit">ログイン</button>

						<p>
							<a href="#">※IDまたはパスワードをお忘れの方はこちら※</a>
						</p>
					</form>
				</article>
				<!-- ▲コンテンツ -->
			</main>

 <!-- ▼フッター -->
<?php
	require_once "./parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
