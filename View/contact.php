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
		<link rel="stylesheet" href="./../css/Base/normalize.css">
		<link rel="stylesheet" href="./../css/Base/base.css">
		<link rel="stylesheet" href="./../css/font-awesome.css">

		<link rel="stylesheet" href="./../css/layout.css">
		<link rel="stylesheet" href="./../css/Common/common.css">
		<link rel="stylesheet" href="./../css/contact.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadclumb">
					<li><a href="#">HOME</a></li>
					<li><a href="#"></a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

						<h1>お問い合わせ</h1>

						<form class="" action="index.html" method="post">
							<fieldset>
								<legend>お問い合わせ内容入力</legend>

								<table>
									<tbody>
										<tr>
											<th>お名前</th>
											<td><input type="text" name="name"></td>
										</tr>
										<tr>
											<th>メールアドレス</th>
										<td><input type="text" name="mail_address" value=""></td>
										</tr>
										<tr>
											<th>お問い合わせ種別</th>
											<td>
												<select class="" name="">
													<option></option>
												</select>
											</td>
										</tr>
										<tr>
											<th>件名</th>
											<td><input type="text" name="title" value=""></td>
										</tr>
										<tr>
											<th>質問内容</th>
											<td><input type="text" name="text" value=""></td>
										</tr>
									</tbody>
								</table>


								<div class="button">
									<p>入力内容に間違いがなければ｢送信する｣ボタンをクリックしてください。</p>
									<button type="submit">送信する</button>
								</div>
							</fieldset>
						</form>

				</article>

			</main>

 <!-- ▼フッター -->
<?php
	require_once "./parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
