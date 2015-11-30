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
		<link rel="stylesheet" href="./../css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./../css/style.css">

		<!-- js -->
		<script type="text/javascript" src="./../js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="./../js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="row">
			<div class="header bg-ns">
<?php
	require_once "./parts/header.html";
?>
			</div>
			<!-- ▼ヘッダー -->

			<main class="container">

				<!-- ▼コンテンツ -->
				<article class="col-md-6 col-md-offset-3">
					<section class="login">
						<div class="login_form">
							<h2 class="text-center bg-ns">管理者ログイン</h2>
							<form action="index.php" method="post" role="form">
								<div class="form-group col-md-10 col-md-offset-1">
									<label for="id">ID</label>
									<input type="text" name="user_id" id="id" class="form-control" placeholder="ID">
								</div>
								<div class="form-group col-md-10 col-md-offset-1">
									<label for="passwd">PASSWORD</label>
									<input type="password" name="password" id="passwd" class="form-control" placeholder="PASSWORD">
								</div>

								<button type="submit" class="btn btn-default center-block">ログイン</button>
							</form>
						</div><!-- /.login_form -->

						<p>
							※IDまたはパスワードをお忘れの方は管理者にお問い合わせください。
						</p>
					</section>
				</article>
				<!-- ▲コンテンツ -->
			</main>

 <!-- ▼フッター -->
			<div class="footer bg-ns">
<?php
	require_once "./parts/footer.html";
?>
			</div>

		</div><!-- /.row -->
	</body>
</html>
<!-- ▲表示▲ -->
