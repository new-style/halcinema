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
		<link rel="stylesheet" href="../css/login.css">

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
					<section class="loginWrap">
						<img src="../img/logo02.png">
						<form action="Member/mypage.php" method="post" class="float_C">
							<label for="user_id">ユーザーID</label><input type="text" name="user_id" value="" id="user_id">
							<label for="passwd">パスワード</label><input type="password" name="password" value="" id="passwd">
							<input type="checkbox" name="name" value="" id="cookie"><label for="cookie" id="cook">ログイン情報を保持する</label>	
							<button type="submit">ログイン</button>
						</form>
							<p class="passFogot">
								<a href="#">※IDまたはパスワードをお忘れの方はこちら※</a>
							</p>
					</section>
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
