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
		<link rel="stylesheet" href="./css/step1.css">

		<title>新規会員登録</title>
	</head>
	<body>

		<main>
			<article class="l-wrapper">
				<section class="l-stepHead">
					<h1>新規会員登録</h1>
				</section>

				<section class="l-stepMain">

					<form action="confirm.php" method="post" class="userForm">
						<table>
							<tr>
								<td colspan="2">
									会員登録内容
								</td>
							</tr>
							<tr>
								<td class="l-tdWidth1">
									ユーザネーム
								</td>
								<td class="l-tdWidth2">
									<input type="text" name="userName">
								</td>
							</tr>
							<tr>
								<td>
									ユーザID
								</td>
								<td>
									<input type="text" name="id">※半角英数
								</td>
							</tr>
							<tr>
								<td>
									メールアドレス
								</td>
								<td>
									<input type="text" name="address">
								</td>
							</tr>
							<tr>
								<td>
									パスワード
								</td>
								<td>
									<input type="password" name="password">
								</td>
							</tr>
							<tr>
								<td rowspan="2">
									お名前
								</td>
								<td class="username">
									姓<input type="text" name="familyName">
									名<input type="text" name="firstName">
								</td>
							</tr>
							<tr>
								<td class="username">
									セイ<input type="text" name="familyNameKana">
									メイ<input type="text" name="firstNameKana">
								</td>
							</tr>
							<tr>
								<td>
									電話番号
								</td>
								<td>
									<input type="text" name="tel">
								</td>
							</tr>
							<tr>
								<td>
									性別
								</td>
								<td>
									<input type="radio" name="sex" value="0"><span>男</span>
									<input type="radio" name="sex" value="1"><span>女</span>
								</td>
							</tr>
							<tr>
								<td>
									生年月日
								</td>
								<td>
									<input type="text" name="birth">例)19940620
								</td>
							</tr>
							<tr>
								<td>
									都道府県
								</td>
								<td>
									<select name="Prefectures">
										<option value="">都道府県の選択</option>

										<option value="1">北海道</option>
										<option value="2">青森県</option>
										<option value="3">岩手県</option>
										<option value="4">宮城県</option>
										<option value="5">秋田県</option>
										<option value="6">山形県</option>
										<option value="7">福島県</option>
										<option value="8">東京都</option>
										<option value="9">神奈川県</option>
										<option value="10">埼玉県</option>
										<option value="11">千葉県</option>
										<option value="12">茨城県</option>
										<option value="13">栃木県</option>
										<option value="14">群馬県</option>
										<option value="15">山梨県</option>
										<option value="16">新潟県</option>
										<option value="17">長野県</option>
										<option value="18">富山県</option>
										<option value="19">石川県</option>
										<option value="20">福井県</option>
										<option value="21">愛知県</option>
										<option value="22">岐阜県</option>
										<option value="23">静岡県</option>
										<option value="24">三重県</option>
										<option value="25">大阪府</option>
										<option value="26">兵庫県</option>
										<option value="27">京都府</option>
										<option value="28">滋賀県</option>
										<option value="29">奈良県</option>
										<option value="30">和歌山県</option>
										<option value="31">鳥取県</option>
										<option value="32">島根県</option>
										<option value="33">岡山県</option>
										<option value="34">広島県</option>
										<option value="35">山口県</option>
										<option value="36">徳島県</option>
										<option value="37">香川県</option>
										<option value="38">愛媛県</option>
										<option value="39">高知県</option>
										<option value="40">福岡県</option>
										<option value="41">佐賀県</option>
										<option value="42">長崎県</option>
										<option value="43">熊本県</option>
										<option value="44">大分県</option>
										<option value="45">宮崎県</option>
										<option value="46">鹿児島県</option>
										<option value="47">沖縄県</option>
									</select>
								</td>
							</tr>
						</table>

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
							<tr>
								<td>
									コンビニ
								</td>
								<td>
									<select class="" name="">
										<option>セブンイレブン</option>
										<option>ローソン</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									店舗
								</td>
								<td>
									<input type="radio" name="tenpo" value="0">セブンイレブン
									<input type="radio" name="tenpo" value="1">ローソン
									<input type="radio" name="tenpo" value="1">ファミリーマート
								</td>
							</tr>
						</table>

						<div class="l-submitBox">
							<p>
								入力内容に間違いがなければ「送信する」ボタンをクリックしてください
							</p>
						<input type="submit" placeholder="送信する">
						</div>

					</form>
				</section>
			</article>
		</main>

	</body>
</html>
<!-- ▲表示▲ -->
