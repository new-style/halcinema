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

					<section class="col-md-10 sales">
						<div class="top_content">
							<h2>売上管理</h2>

              <form role="form" class="" action="./search.html" method="post">
                <fieldset>
                  <legend>検索</legend>
                  <div class="form-group">
                    <!-- 年 -->
                    <select class="form-control" name="" id="year">
                      <option>2014</option>
                      <option>2015</option>
                    </select>
                    <label for="year">年</label>
                  </div>
                  <!-- 月 -->
                  <div class="form-group">
                    <select class="form-control" name="" id="month">
<?php
  for( $i=1; $i <= 12; $i++){
?>
                      <option>
                        <?php echo $i; ?>
                      </option>
<?php
  }
?>
                    </select>
                    <label for="month">月</label>
                  </div>
                  <!-- 検索ボタン -->
                  <button type="submit" name="button" class="btn btn-default"><i class="fa fa-search"></i>検索</button>
                </fieldset>
              </form>


							<!-- 検索結果 -->
							<div class="pdf col-md-2">
								<a href="#" class="btn btn-warning btn-sm ">PDF出力</a>
							</div>
              <table class="table table-striped table-bordered">
                <caption class="">2015 年 １ 月</caption>
                <thead>
                    <tr>
                      <th>No</th><th>日付</th><th>曜日</th><th>ネット</th><th>店頭</th><th>総合計</th>
                    </tr>
                  </thead>
                <tbody>
<?php
	for( $i = 1; $i < 31; $i++ ){
?>
                  <tr>
                    <td><?php echo $i; ?></td></td><td><?php echo $i; ?>日</td><td>火</td><td>10,000</td><td>10,000</td><td>20,000</td>
                  </tr>
<?php
	}
?>
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
