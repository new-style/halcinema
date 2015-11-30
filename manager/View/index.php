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
			<!-- ▼ヘッダー -->
			<div class="header bg-ns">
<?php
	require_once "./parts/header.html";
?>
			</div>

			<main class="container">

				<!-- ▼コンテンツ -->
				<article>
          <aside class="col-md-2">
<?php
  require_once "./parts/side_var.php";
?>
          </aside>

					<section class="col-md-10 top">
						<div class="top_content">
							<h2>管理者メニュー</h2>
              <ul class="col-md-12">
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>会員管理</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>売上管理</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>来客管理</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>映画管理</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>メルマガ管理</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>管理者一覧</a></li>
              </ul>

						</div><!-- /.top_content -->
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
