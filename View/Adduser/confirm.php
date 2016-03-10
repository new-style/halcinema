<?php



$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$mail_address = $_POST['mail_address'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];
$tel = $_POST['tel'];
$sex = $_POST['sex'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$pref_id = $_POST['pref_id'];

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$last_name_kana = $_POST['last_name_kana'];
$first_name_kana = $_POST['first_name_kana'];





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
		<!-- CSS読み込み -->
		<link rel="stylesheet" href="../../css/Base/normalize.css">
		<link rel="stylesheet" href="../../css/Base/base.css">
		<link rel="stylesheet" href="../../css/font-awesome.css">

		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">
    <link rel="stylesheet" href="../../css/Adduser/confirm.css">
		<!-- JS読み込み -->

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "../parts/header.html";
?>



<main class="l-content">
	<!-- ▼パンくずリスト -->
	<ul class="l-breadcrumb">
		<li><a href="http://127.0.0.1/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Adduser/step1.php">会員情報入力</a></li>
		<li><a href="http://127.0.0.1/halcinema/View/Adduser/confirm.php">登録情報確認</a></li>
	</ul>
	<!-- ▲パンくずリスト -->

	<article>
		<!-- ▼ステップバー -->
		<ul class="stepBar step3">
				<li class="step btn">Step1<span>購入枚数と座席<br/>を選択してください。</span></li>
				<li class="step current btn">Step2<span>お客様情報とお支払情報<br/>を入力してください。</span></li>
				<li class="step btn">Step3<span>購入内容のご確認</span></li>
		</ul>
		<!-- ▲ステップバー -->

		<!-- ▼コンテンツ -->
		<h1>会員情報確認</h1>

		<form action="../sys_login.php" method="post">
			<!-- ▼会員情報▼ -->
			<div class="confirm">
				<h2 class="text_Center">会員情報</h2>

				<table>
					<tbody>
						<tr>
							<th>
								ユーザネーム
							</th>
							<td>
								<?php echo $user_name; ?>
							</td>
						</tr>
						<tr>
							<th>
								ユーザID
							</th>
							<td>
								<?php echo $user_id; ?>
							</td>
						</tr>
						<tr>
							<th>
								メールアドレス
							</th>
							<td>
								<?php echo $mail_address; ?>
							</td>
						</tr>
						<tr>
							<th>
								パスワード
							</th>
							<td>
								<?php echo $password; ?>
								<?php echo $password_conf; ?>
							</td>
						</tr>
						<tr>
							<th rowspan="2">
								お名前
							</th>
							<td>
								<?php echo $last_name.$first_name; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $last_name_kana.$first_name_kana; ?>
							</td>
						</tr>
						<tr>
							<th>
								電話番号
							</th>
							<td>
								<?php echo $tel; ?>
							</td>
						</tr>
						<tr>
							<th>
								性別
							</th>
							<td>
								<?php echo $sex; ?>
							</td>
						</tr>
						<tr>
							<th>
								生年月日
							</th>
							<td>
								<?php echo $year.$month.$day; ?>
							</td>
						</tr>
						<tr>
							<th>
								都道府県
							</th>
							<td>
								<?php echo $pref_id; ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- ▲会員情報▲ -->


			<!-- ▼お支払情報▼ -->
			<div class="confirm">
				<h2 class="text_Center">お支払情報</h2>

				<table>
					<caption>コンビニ決済(前払い)</caption>
					<tbody>
						<tr>
							<th>
								店舗
							</th>
							<td>
								ファミリーマート
							</td>
						</tr>
					</tbody>
				</table>

				<table>
					<caption>クレジットカード</caption>
					<tbody>
						<tr>
							<th>
								種類
							</th>
							<td>
								JCB
							</td>
						</tr>
						<tr>
							<th>
								番号
							</th>
							<td>
								0120-1234-5678-9123
							</td>
						</tr>
						<tr>
							<th>
								有効期限
							</th>
							<td>
								12 月 30 年
							</td>
						</tr>
						<tr>
							<th>
								セキュリティーコード
							</th>
							<td>
								****
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- ▲お支払情報▲ -->


			<!-- ボタン -->
			<div class="confirm button">
				<p>
					入力内容に間違いがなければ、「登録する」ボタンを押してください。
				</p>
					<button type="submit" class="btn btn_Regular F_000">戻る</button>
					<button type="submit" class="btn btn_Regular F_000">登録する</button>
			</div>

		</form>
	</article>
	<!-- ▲コンテンツ -->
</main>


		<!-- ▼フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
