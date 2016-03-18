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

	$movie_title = $row['movie_title'];
	$movie_img = $row['movie_img'];

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

		<link rel="stylesheet" href="../../css/Shop/schedule.css">
		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ヘッダー -->
<?php
	require_once "./../parts/header.php";
?>

			<main class="l-content">
				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
						<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HOME</a></li>
						<li><a href="#">上映スケジュール</a></li>
				</ul>
				<!-- ▲パンくず -->

				<!-- ▼左コンテンツ -->
				<article class="l-cLeft">
					<div class="schedule_Icon_List">
						<ul>
							<li>
								<ul>
									<li>⭕️余裕あり</li>
									<li>▲残りわずか</li>
								</ul>
							</li>
							<li>
								<ul class="icon_List_three">
									<li>❌販売終了</li>
									<li>-販売前</li>
									<li>料金一覧</li>
								</ul>
							</li>
							<li>R18 18歳以上がご閲覧になれます</li>
							<li>R15 15歳以上がご閲覧になれます</li>
							<li>PG12 小学生には助言・指導が必要です</li>
							<li>
								<ul>
									<li>NEW 上映開始週</li>
									<li>LAST 上映最終週</li>
								</ul>
							</li>
						</ul>
					</div>

					<!-- ▼日付選択 -->
					<div class="day_Select float_C">

						<a href="#" class="float_L"><i class="fa fa-angle-left"></i></a>
						<ul class="week_Day_BOX">
<?php
	$week = Array('月','火','水','木','金','土','日',);
	for( $i=0;$i<7;$i++ ){
?>
							<li><a href="#">3/<?php echo 18+$i.$week[$i];?></a></li>
<?php
	}
?>
						</ul>
						<a href="#" class="float_R"><i class="fa fa-angle-right"></i></a>

					</div>
					<!-- ▲日付選択 -->

					<!-- ▼作品表示 -->
					<div class="schedule">
						<h2 class="text_Center">3/18の上映スケジュール</h2>


						<?php
							while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
						        // echo '<tr><a href="#">
						        //         <td>'.$row['id'].'</td>
						        //         <td>'.$row['user_name'].'</td>
						        //         <td>'.$row['name'].'</td>
						        //         <td><a href="user_edit.php?id='.$row['id'].'" class="btn btn-warning btn-sm">変更</a></td>
						        //         <td><a href="user_delete.php?id='.$row['id'].'" class="btn btn-default btn-sm">削除</a></td>
						        //       </a></tr>';
						?>
						<!-- ▼スケジュール -->
						<section class="float_C">
							<h3><?php echo $row['movie_title']; ?></h3>
							<div class="movieImgBox float_L">
								<a href="../movies_info.php">
									<img src="http://127.0.0.1/halcinema/manager/img/<?php echo $row['movie_img']; ?>" alt="<?php echo $row['movie_img']; ?>">
								</a>
							</div>
							<!-- ◎→余裕あり △→あと少し ×→なし -->
							<ul class="float_C text_Center">
								<li><a href="../Reserve/step1.php?ticket=1"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
								<li><a href="../Reserve/step1.php"><div class="day_Time_Box"><span class="situ float_L">◎</span><span class="movie_Time float_L"><span class="time_Font">10:00</span><br/>～12:30</span></div></a></li>
							</ul>
						</section>
						<?php
							}
						?>


						<!-- <section class="float_C">
							<h3>ラブライブ!TheSchoolIdolMovie</h3>
							<div class="movieImgBox float_L">
								<a href="../movies_info.php">
									<img src="../../img/lovelive.jpg" alt="ラブライブ!TheSchoolIdolMovie">
								</a>
							</div>
							◎→余裕あり △→あと少し ×→なし
							<ul class="float_C text_Center">
								<li><a href="../Reserve/step1.php"><div class="day_Time">hh:mm<br/>～hh:mm</div><div class="reserve_Ok">◎予約購入</div></a></li>
								<li><a href="#"><div class="day_Time">hh:mm<br/>～hh:mm</div><div class="reserve_Early">△予約購入</div></a></li>
								<li><a href="#"><div class="day_Time">hh:mm<br/>～hh:mm</div><div class="reserve_No">×予約購入</div></a></li>
							</ul>
						</section> -->
						<!-- ▲スケジュール -->

					</div>
					<!-- ▲作品表示 -->


				</article>
				<!-- ▲左コンテンツ -->
<?php
	require_once "./../parts/right_side.html";
?>
			</main>

 <!-- フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
