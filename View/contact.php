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
				<ul class="l-breadcrumb">
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/Shop/shop_index.php">HOME</a></li>
					<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/contact.php">お問い合わせ</a></li>
				</ul>
				<!-- ▼パンくず -->

				<!-- ▼コンテンツ -->
				<article>

						<h1>お問い合わせ</h1>

						<section class="wait">
							<h2>お問い合わせの前に</h2>
							<p>
								よくある質問をご確認ください。
							</p>
							<ul class="faq_each_link">
								<li><a href="#"><i class="fa fa-caret-right"></i>会員登録について</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>ログインについて</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i>チケット予約について</a></li>
								<li><a href="http://127.0.0.1/NEWSTYLE/halcinema/View/faq.php"><i class="fa fa-caret-right"></i>よくある質問へ</a></li>
							</ul>
						</section><!-- /.faq_each_link -->




						<section class="tel_contact">
							<h2>電話でのお問い合わせ</h2>
							<p>
								<i class="fa fa-phone"></i>0120-800-000
							</p>
							携帯電話、PHSで利用可能<br/>
							注意一部のIP電話からは接続できない場合があります。<br/>
							受付時間：午前9時～午後8時(年中無休)
						</section><!-- /.tel_contact -->



						<section class="contact">
							<h2>メールでのお問い合わせ</h2>
							<p>メールでのご質問やお問い合わせなど承ります。</p>
							<form class="" action="" method="post">

								<table>
									<tbody>
										<tr>
											<th>お問い合わせ種別</th>
											<td>
												<select class="" name="contact_class">
													<option>選択してください</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>タイトル</th>
											<td><input type="text" name="title" value=""></td>
										</tr>
										<tr>
											<th>質問内容</th>
											<td><textarea type="text" name="contact_content" value=""></textarea></td>
										</tr>
										<tr>
											<th>劇場選択</th>
											<td>
												<div class="theater_select">
													<input type="radio" name="theater_select" value="yes" id="yes"><label for="yes">選択する</label>
													<input type="radio" name="theater_select" value="no" id="no"><label for="no">選択しない</label>
												</div>
												<div class="theater">
													<input type="radio" name="theater" value="tokyo" id="tokyo"><label for="tokyo">東京</label>
													<input type="radio" name="theater" value="osaka" id="osaka"><label for="osaka">大阪</label>
													<input type="radio" name="theater" value="nagoya" id="nagoya"><label for="nagoya">名古屋</label>
												</div>
											</td>
										</tr>
										<tr>
											<th>お名前</th>
											<td><input type="text" name="name"></td>
										</tr>
										<tr>
											<th>メールアドレス</th>
										<td><input type="text" name="mail_address" value=""></td>
										</tr>
									</tbody>
								</table>

								<div class="button">
									<p>入力内容に間違いがなければ｢送信する｣ボタンをクリックしてください。</p>
									<button type="submit" class="btn btn_Regular">送信する</button>
								</div><!-- /.button -->

							</form>
						</section><!-- /.contact -->

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
