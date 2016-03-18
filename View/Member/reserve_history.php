<?php
session_start();
$dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
$dbUser = "root";
// windowsの人はrootではなく空("")にしてください。
$dbPass = "root";

$pdo = new PDO ($dsn, $dbUser, $dbPass);
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//設定②SQLインジェクション対策
$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
?>
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
		<link rel="stylesheet" href="./../../css/Base/normalize.css">
		<link rel="stylesheet" href="./../../css/Base/base.css">
		<link rel="stylesheet" href="./../../css/font-awesome.css">

		<link rel="stylesheet" href="./../../css/layout.css">
		<link rel="stylesheet" href="./../../css/Common/common.css">
		<link rel="stylesheet" href="./../../css/Member/reserve_history.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.php";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="#http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Menber/mypage.php">マイページ</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article class="float_C">

					<h1 class="text_Center border_Solid">購入履歴</h1>
					<?php
					  try{
					    $sql = "select * from hal_movie";
					    $stmh = $pdo -> prepare($sql);
					    $stmh -> execute();
					    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
					    	echo '<div class="tickets_contents float_C">
												<h3><a href="#" style="color: #fff;text-decoration: none;">'.$row['movie_title'].'</a></h3>
												<div class="float_L" style="width: 150px;height: 150px;background: url(http://127.0.0.1/halcinema/manager/img/'.$row['movie_img'].');background-size: cover;background-position: center center;"></div>
												<div class="tickets_info float_L float_C">
													<dl>
														<dt>上映日：</dt>
														<dd>'.$row['start_date'].'</dd>
													</dl>
													<dl>
														<dt>スクリーン：</dt>
														<dd>X</dd>
													</dl>
													<dl>
														<dt>シート番号</dt>
														<dd>A-2</dd>
													</dl>
													<dl>
														<dt>購入枚数：</dt>
														<dd>2枚</dd>
													</dl>
												</div>
											</div>';
					    }
					  }
					  catch(PDOException $e){
					    echo "エラーだぉ";
					    echo "<br>【エラーメッセージ】<br>";
					    echo $e -> getMessage();
					    echo "<br >【エラーコード】<br>";
					    echo $e -> getCode();
					  }
					?>


				</article>
				<!-- ▲コンテンツ -->
					<section class="tickets">

							<p class="text_Right">
								小計金額：2,800円
							</p>
						<p class="text_Right">
							合計金額：X,XXX円
						</p>
					</section><!-- tickets -->
			</main>

 <!-- ▼フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
