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
    <link rel="stylesheet" href="../../css/Adduser/step1.css">
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
		<li><a href="#">会員情報入力</a></li>
		<li><a href="#">登録情報確認</a></li>
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

		<form action="../complete.php" method="post">
			<!-- ▼会員情報▼ -->
			<fieldset>
				<legend class="text_Center">会員情報</span></legend>

				<table>
					<tbody>
						<tr>
							<th>
								ユーザネーム
							</th>
							<td>
								よしあき
							</td>
						</tr>
						<tr>
							<th>
								ユーザID
							</th>
							<td>
								yoshi245
							</td>
						</tr>
						<tr>
							<th>
								メールアドレス
							</th>
							<td>
								yoshida389@yahoo.co.jp
							</td>
						</tr>
						<tr>
							<th>
								パスワード
							</th>
							<td>
								*******
							</td>
						</tr>
						<tr>
							<th>
								お名前
							</th>
							<td>
								吉田智明
							</td>
							<td>
								ヨシダトモアキ
							</td>
						</tr>
						<tr>
							<th>
								電話番号
							</th>
							<td>
								080-3521-7898
							</td>
						</tr>
						<tr>
							<th>
								性別
							</th>
							<td>
								男
							</td>
						</tr>
						<tr>
							<th>
								生年月日
							</th>
							<td>
								1999年8月11日
							</td>
						</tr>
						<tr>
							<th>
								都道府県
							</th>
							<td>
								山口県
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<!-- ▲会員情報▲ -->


			<!-- ▼お支払情報▼ -->
			<fieldset>
				<legend class="text_Center">お支払情報</legend>

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
			</fieldset>
			<!-- ▲お支払情報▲ -->


			<!-- ボタン -->
			<div class="">
				<button type="submit">戻る</button>
				<button type="submit">登録する</button>
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
