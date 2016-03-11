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
  try{
    $sql = "select * from hal_movie";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $my_content_date = Array();
    $my_content_name = Array();
    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
    	print_r($row);
    echo "<br>";
    	$my_content_date[] = $row['start_date'];
    	$my_content_name[] = $row['movie_title'];
    }
    print_r($my_content_date);
    echo "<br>";
    $sql2 = "select * from hal_order";
    $stmh2 = $pdo -> prepare($sql2);
    $stmh2 -> execute();
    while($row2 = $stmh2 -> fetch(PDO::FETCH_ASSOC)){
    	print_r($row2);
    	echo "<br>";
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
		<link rel="stylesheet" href="./../../css/Member/mypage.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadcrumb">
					<li><a href="#http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Menber/mypage.php">マイページ</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

					<h1 class="text_Center border_Solid">マイページ</h1>

					<!-- ▼予約履歴▼ -->
					<section id="reserve_history">
						<h2>予約履歴</h2>
						<div class="my_content">
							<dl>
								<dd class="my_content_date"><?php echo $my_content_date[0] ?></dd>
								<dd class="my_content_name"><?php echo $my_content_name[0] ?></dd>
							</dl>
							<dl>
								<dd class="my_content_date"><?php echo $my_content_date[1] ?></dd>
								<dd class="my_content_name"><?php echo $my_content_name[1] ?></dd>
							</dl>
							<dl>
								<dd class="my_content_date"><?php echo $my_content_date[2] ?></dd>
								<dd class="my_content_name"><?php echo $my_content_name[2] ?></dd>
							</dl>
						</div>
						<div class="more">
							+more
						</div>
					</section>
					<!-- ▲予約履歴▲ -->


					<!-- ▼購入履歴▼ -->
					<section id="purchase_history">
						<h2>購入履歴</h2>
						<div class="my_content">
							<dl>
								<dd>2015/12/25</dd>
								<dd>ジュラシックワールド</dd>
							</dl>
							<dl>
								<dd>2015/12/15</dd>
								<dd>S-最後の警官-</dd>
							</dl>
							<dl>
								<dd>2015/12/05</dd>
								<dd>カリフォルニアダダダダ</dd>
							</dl>
						</div>
						<div class="more">
							+more
						</div>
					</section>
					<!-- ▲購入履歴▲ -->


					<!-- ▼ポイント▼ -->
					<section id="point">
						<h2>ポイント</h2>
						<div class="my_content">
							1234<span>pt</span>
						</div>
					</section>
					<!-- ▲ポイント▲ -->


					<!-- ▼お気に入りリスト▼ -->
					<section id="fav">
						<h2>お気に入りリスト</h2>
						<div class="my_content">
							<dl>
								<dd><img src="./../../img/lovelive.jpg" alt="" /></dd>
								<dd>カリフォルニアダダダダ</dd>
							</dl>
							<dl>
								<dd><img src="./../../img/lovelive.jpg" alt="" /></dd>
								<dd>カリフォルニアダダダダ</dd>
							</dl>
							<dl>
								<dd><img src="./../../img/lovelive.jpg" alt="" /></dd>
								<dd>カリフォルニアダダダダ</dd>
							</dl>
						</div>
						<div class="more">
							+more
						</div>
					</section>
					<!-- ▲お気に入りリスト▲ -->


					<!-- ▼シネマズマガジン▼ -->
					<section id="magezine">
						<h2>シネマズマガジン</h2>
						<div class="my_content">
							<dl>
								<dd><span class="m_date">2015/09/12</span><span class="m_title">上映作品を更新しました。</span></dd>
							</dl>
							<dl>
								<dd><span class="m_date">2015/09/12</span><span class="m_title">上映作品を更新しました。</span></dd>
							</dl>
						</div>
						<div class="more">
							+more
						</div>
					</section>
					<!-- ▲シネマズマガジン▲ -->


					<!-- ▼ユーザ登録情報▼ -->
					<section id="user_info">
						<h2>ユーザ登録情報</h2>
						<div class="my_content">
							<ul>
								<li><a href="#">ユーザ情報変更</a></li>
								<li><a href="#">支払方法変更</a></li>
							</ul>
						</div>
					</section>
					<!-- ▲ユーザ登録情報▲ -->


				</article>
				<!-- ▲コンテンツ -->

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
