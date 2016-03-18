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
  $id = $_SESSION["id"];
  // echo $id;
	$sql = "select * from hal_tanaka where id = ".$id;
	// $sql = "update hal_tanaka set ".$name." = '".$edit."' where id=".$id;
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
		<link rel="stylesheet" href="../.././css/Bace/normalize.css">
		<link rel="stylesheet" href="../.././css/Bace/base.css">
		<link rel="stylesheet" href="../.././css/layout.css">
		<link rel="stylesheet" href="../.././css/Common/common.css">
		<link rel="stylesheet" href="../../css/Member/setting.css">

		<title>ユーザー情報変更</title>
	</head>
	<body>
		<main>
			<article class="l-wrapper">
<?php
	require_once "./../parts/header.php";
?>

				<section class="l-stepHead">
					<h1>ユーザー情報変更</h1>
				</section>

				<section class="l-stepMain">
					<div class="inn-wrapper">

						<h2 class="set-H2">会員登録内容変更</h2>

							<table>
								<tr>
									<td colspan="2">
										ユーザー情報
									</td>
								</tr>
								<tr>
									<td>
										ユーザーID
									</td>
									<td>
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=user_id" method="post" class="userForm">
										<input type="text" name="user_edit" value="<?php echo $row['user_id']?>"><span class="inputMsg">※半角英数</span>
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										メールアドレス
									</td>
									<td>
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=mail_address" method="post" class="userForm">
										<input type="text" name="user_edit" value="<?php echo $row['mail_address']?>">
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										パスワード
									</td>
									<td>
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=password" method="post" class="userForm">
										<input type="password" name="oldPassword" placeholder="古いパスワード">
										<input type="password" name="newPassword" placeholder="新しいパスワード">
										<input type="password" name="newPassword" placeholder="新しいパスワード(再入力)">
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										お名前
									</td>
									<td class="username">
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=name" method="post" class="userForm">
										<input type="text" name="user_edit" value="<?php echo $row['name']?>">
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										フリガナ
									</td>
									<td class="username">
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=kana_name" method="post" class="userForm">
										<input type="text" name="user_edit" value="<?php echo $row['kana_name']?>">
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										電話番号
									</td>
									<td>
										<form action="sys_setting.php?id=<?php echo $row['id']?>&name=tel" method="post" class="userForm">
										<input type="text" name="user_edit" value="<?php echo $row['tel']?>">
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										性別
									</td>
									<td>
										<!-- 値入れる -->
										<?php
											if(0 == $row['sex']){
												echo "男";
											}
											else{
												echo "女";
											}
										?>
									</td>
								</tr>
								<tr>
									<td>
										生年月日
									</td>
									<td>
										<?php echo $row['birth']?>
									</td>
								</tr>
								<tr>
									<td>
										都道府県
									</td>
									<td>
										<form action="sys_setting.php" method="post" class="userForm">
										<select name="Prefectures">
											<option value="">都道府県の選択</option>
											<option value="北海道">北海道</option>
											<option value="青森県">青森県</option>
											<option value="岩手県">岩手県</option>
											<option value="宮城県">宮城県</option>
											<option value="秋田県">秋田県</option>
											<option value="山形県">山形県</option>
											<option value="福島県">福島県</option>
											<option value="茨城県">茨城県</option>
											<option value="栃木県">栃木県</option>
											<option value="群馬県">群馬県</option>
											<option value="埼玉県">埼玉県</option>
											<option value="千葉県">千葉県</option>
											<option value="東京都">東京都</option>
											<option value="神奈川県">神奈川県</option>
											<option value="新潟県">新潟県</option>
											<option value="富山県">富山県</option>
											<option value="石川県">石川県</option>
											<option value="福井県">福井県</option>
											<option value="山梨県">山梨県</option>
											<option value="長野県">長野県</option>
											<option value="岐阜県">岐阜県</option>
											<option value="静岡県">静岡県</option>
											<option value="愛知県">愛知県</option>
											<option value="三重県">三重県</option>
											<option value="滋賀県">滋賀県</option>
											<option value="京都府">京都府</option>
											<option value="大阪府">大阪府</option>
											<option value="兵庫県">兵庫県</option>
											<option value="奈良県">奈良県</option>
											<option value="和歌山県">和歌山県</option>
											<option value="鳥取県">鳥取県</option>
											<option value="島根県">島根県</option>
											<option value="岡山県">岡山県</option>
											<option value="広島県">広島県</option>
											<option value="山口県">山口県</option>
											<option value="徳島県">徳島県</option>
											<option value="香川県">香川県</option>
											<option value="愛媛県">愛媛県</option>
											<option value="高知県">高知県</option>
											<option value="福岡県">福岡県</option>
											<option value="佐賀県">佐賀県</option>
											<option value="長崎県">長崎県</option>
											<option value="熊本県">熊本県</option>
											<option value="大分県">大分県</option>
											<option value="宮崎県">宮崎県</option>
											<option value="鹿児島県">鹿児島県</option>
											<option value="沖縄県">沖縄県</option>

										</select>
									</td>
									<td>
										<button type="submit">変更</button>
										</form>
									</td>
								</tr>
							</table>


							<!-- <h2 class="set-H2"></h2>
							<table>
								<tr>
									<td colspan="2">
										お支払方法
									</td>
								</tr>
								<tr>
									<td class="l-tdWidth1">
										クレジット
									</td>
									<td class="l-tdWidth2">
										<select class="" name="">
											<option>未設定</option>
											<option>MasterCard</option>
											<option>Visa</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										種類
									</td>
									<td>
										<select class="" name="">
											<option>種類1</option>
											<option>種類2</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										番号
									</td>
									<td>
										<select class="" name="">
											<option>種類1</option>
											<option>種類2</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										有効期限
									</td>
									<td>
										<select class="" name="">
											<option>種類1</option>
											<option>種類2</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										セキュリティコード
									</td>
									<td>
										<input type="text" name="secureCode">
									</td>
								</tr>
							</table> -->


					</div>

				</section>
			</article>
		</main>
<!-- ▼フッター -->
<?php
	require_once "../parts/footer.html";
?>


	</body>
</html>
<!-- ▲表示▲ -->
