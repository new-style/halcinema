<?php session_start();

	$dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
	$dbUser = "root";
	// windowsの人はrootではなく空("")にしてください。
	$dbPass = "root";

	$pdo = new PDO ($dsn, $dbUser, $dbPass);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//設定②SQLインジェクション対策
	$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

	$sql = "select * from hal_movie";
	$stmh = $pdo -> prepare($sql);
	$stmh -> execute();
	$row = $stmh -> fetch(PDO::FETCH_ASSOC);

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
		<link rel="stylesheet" href="../../css/Base/normalize.css">
		<link rel="stylesheet" href="../../css/Base/base.css">
		<link rel="stylesheet" href="../../css/font-awesome.css">

		<link rel="stylesheet" href="../../css/Shop/coming_movies.css">
		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ヘッダー -->
<?php
	require_once "../parts/header.php";
?>

			<main class="l-content">
				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/coming_movies.php">公開予定の作品一覧</a></li>
				</ul>
				<!-- ▲パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">
					<h1>公開予定の作品一覧</h1>

<?php
	while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
?>

						<section class="border_Solid">
							<a href="../movies_info.php" class="link_None"><h3><?php echo $row['movie_title']; ?></h3>
							<div class="float_C info">
								<div class="float_L">
									<img src="http://127.0.0.1/halcinema/manager/img/<?php echo $row['movie_img']; ?>" alt="<?php echo $row['movie_img']; ?>" /></a>
								</div>
								<p class="float_L">
									あらすじ<br/>
									世界的な恐竜のテーマパーク、ジュラシック・ワールド。
恐竜の飼育員オーウェン（クリス・プラット）が警告したにもかかわらず、
パークの責任者であるクレア（ブライス・ダラス・ハワード）は遺伝子操作によって新種・・・<br/>
									<br/>
									監督： <?php echo $row['kantoku']; ?>、シナリオ：<?php echo $row['scenario']; ?>、キャスト：<?php echo $row['cast']; ?>、スタッフ：<?php echo $row['staff']; ?>
								</p>
							</div>
						</section>
<?php
}
?>

				</article>
				<!-- ▲左コンテンツ -->
<?php
	require_once "../parts/right_side.html";
?>
			</main>

 <!-- フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
