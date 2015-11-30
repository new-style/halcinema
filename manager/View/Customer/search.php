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
		<link rel="stylesheet" href="./../../css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./../../css/style.css">

		<!-- js -->
		<script type="text/javascript" src="./../../js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="./../../js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="row">
			<!-- ▼ヘッダー -->
			<div class="header bg-ns">
<?php
	require_once "./../parts/header.html";
?>
			</div>

			<main class="container">

				<!-- ▼コンテンツ -->
				<article>
          <aside class="col-md-2">
<?php
  require_once "./../parts/side_var.php";
?>
          </aside>

					<section class="col-md-10 customer_search">
						<div class="top_content">
							<h2>顧客管理</h2>

              <form role="form" class="" action="./search.html" method="post">
                <fieldset>
                  <legend>検索</legend>
                  <div class="form-group">
                    <!-- ワード検索 -->
										<label for="year">ワード検索</label>
										<input type="text" class="form-control" id="year" name="name" value="" placeholder="ID等">
                  </div>
                  <!-- 検索ボタン -->
                  <button type="submit" name="button" class="btn btn-default"><i class="fa fa-search"></i>検索</button>
                </fieldset>
              </form>


							<!-- 検索結果 -->
              <table class="table table-striped table-bordered">
                <caption>検索結果</caption>
                <thead>
                    <tr>
                      <th>No.</th><th>会員ID</th><th>氏名</th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <td>1</td><td>aaaaaaaa12345</td><td>山田花子</td>
                  </tr>
                </tbody>
              </table>
						</div><!-- /.top_content -->
					</section>
				</article>
				<!-- ▲コンテンツ -->
			</main>

 			<!-- ▼フッター -->
			<div class="footer bg-ns">
<?php
	require_once "./../parts/footer.html";
?>
			</div>

		</div><!-- /.row -->
</body>
</html>
<!-- ▲表示▲ -->
