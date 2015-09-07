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
		<link rel="stylesheet" href="./../../css/Adduser/step1.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "./../parts/header.html";
?>

			<main class="l-content">

				<!-- ▼パンくず -->
				<ul class="l-breadclumb">
					<li><a href="#">HOME</a></li>
					<li><a href="#"></a></li>
				</ul>
				<!-- ▼パンくず -->

				<h1>新規会員登録</h1>

				<!-- ▼ステップバー -->
				<ul class="stepBar step3">
						<li class="step current btn">Step1<span>お客様情報とお支払方法<br/>を入力してください。</span></li>
						<li class="step btn">Step2<span>お客様情報とお支払情報<br/>を確認してください。</span></li>
						<li class="step btn">Step2<span>登録完了</span></li>
				</ul>
				<!-- ▲ステップバー -->

				<!-- ▼コンテンツ -->
				<article>
					<div class="title_Box text_Center border_Solid">
						<h2>Step1</h2>
						<p>お客様情報とお支払情報を入力してください。</p>
					</div>

					<form class="" action="confirm.php" method="post">
						<!-- ▼お客様情報 -->
						<fieldset>
							<legend class="text_Center">お客様情報入力<span>全ての項目に入力してください。</span></legend>

							<dl>
								<dt>ユーザネーム</dt>
								<dd><input type="text" name="user_name"></dd>
							</dl>

							<dl>
								<dt>ユーザID</dt>
								<dd><input type="text" name="user_id"></dd>
							</dl>

							<dl>
								<dt>メールアドレス</dt>
								<dd><input type="text" name="mail_address"></dd>
							</dl>

							<dl>
								<dt>パスワード</dt>
								<dd><input type="password" name="password"></dd>
							</dl>

							<dl>
								<dt>パスワード確認</dt>
								<dd><input type="password" name="password_conf"></dd>
							</dl>

							<dl>
								<dt>お名前</dt>
								<dd><input type="text" name="name"></dd>
							</dl>

							<dl>
								<dt>フリガナ</dt>
								<dd><input type="text" name="furigana"></dd>
							</dl>

							<dl>
								<dt>電話番号</dt>
								<dd><input type="text" name="tel"></dd>
							</dl>

							<dl>
								<dt>性別</dt>
								<dd>
									<input type="radio" name="sex" value="male" id="male"><label for="male">男</label>
									<input type="radio" name="sex" value="female" id="female"><label for="female">女</label>
								</dd>
							</dl>

							<dl>
								<dt>生年月日</dt>
								<dd>
									<select class="year" name="year">
										<option value="">----</ontion>
			<?php
				for( $sy = 1990; $sy <= 2020; $sy++ ){
					echo "<option value='" . $sy . "'>" . $sy . "</option>";
				}
			?>
									</select>
									<label for="year">年</label>

									<select class="month" name="month">
										<option value="">--</option>
			<?php
				for( $sm = 1; $sm <= 12; $sm++ ){
					echo "<option value='" . $sm . "'>" . $sy . "</option>";
				}
			?>
									</select>
									<label for="month">月</label>

									<select class="day" name="day">
										<option value="">--</option>
			<?php
				for( $sd = 1; $sd <= 31; $sd++ ){
					echo "<option value='" . $ds . "'>" . $sd . "</option>";
				}
			?>
									</select>
									<label for="day">日</label>
								</dd>
							</dl>

							<dl>
								<dt>都道府県</dt>
								<dd>
									<select name="pref_id" class="pref_id">
										<option value="1">北海道</option>
										<option value="2">青森県</option>
										<option value="3">岩手県</option>
										<option value="4">宮城県</option>
										<option value="5">秋田県</option>
										<option value="6">山形県</option>
										<option value="7">福島県</option>
										<option value="8">茨城県</option>
										<option value="9">栃木県</option>
										<option value="10">群馬県</option>
										<option value="11">埼玉県</option>
										<option value="12">千葉県</option>
										<option value="13" selected="selected">東京都</option>
										<option value="14">神奈川県</option>
										<option value="15">新潟県</option>
										<option value="16">富山県</option>
										<option value="17">石川県</option>
										<option value="18">福井県</option>
										<option value="19">山梨県</option>
										<option value="20">長野県</option>
										<option value="21">岐阜県</option>
										<option value="22">静岡県</option>
										<option value="23">愛知県</option>
										<option value="24">三重県</option>
										<option value="25">滋賀県</option>
										<option value="26">京都府</option>
										<option value="27">大阪府</option>
										<option value="28">兵庫県</option>
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
								</dd>
							</dl>
						</fieldset>
						<!-- ▲お客様情報 -->






						<!-- ▼お支払方法選択 -->
						<fieldset>
							<legend class="text_Center">お支払方法選択<span>※支払い方法を選択し、全ての項目に入力してください。</span></legend>

							<!-- ▼携帯キャリア決済 -->
							<div class="select_pay">
								<i class="fa fa-angle-right"></i>携帯キャリア決済
							</div>
							<div class="pay">
								<dl>
									<dd>
										<input type="radio" name="carrier" value="docomo" id="docomo">
										<label for="docomo">docomo</label>
										<input type="radio" name="carrier" value="au" id="au">
										<label for="au">au</label>
										<input type="radio" name="carrier" value="softbank" id="softbank">
										<label for="softbank">softbank</label>
									</dd>
								</dl>
							</div>
							<!-- ▲携帯キャリア決済 -->

							<!-- ▼コンビニ決済 -->
							<div class="select_pay">
								<i class="fa fa-angle-right"></i>コンビニ決済(前払い)
							</div>
							<div class="pay">
								<dl>
									<dd>
										<input type="radio" name="name" value="seven" id="seven">
										<label for="seven">セブンイレブン</label>
										<input type="radio" name="name" value="famima" id="famima">
										<label for="famima">ファミリーマート</label>
										<input type="radio" name="name" value="lawson" id="lawson">
										<label for="lawson">ローソン</label>
										<input type="radio" name="name" value="sankus" id="sankus">
										<label for="sankus">サークルK・サンクス</label>
									</dd>
								</dl>
							</div>
							<!-- ▲コンビニ決済 -->

							<!-- ▼クレジット -->
							<div class="select_pay">
								<i class="fa fa-angle-right"></i>クレジットカード
							</div>
							<div class="pay">
								<dl>
									<dt>種類</dt>
									<dd>
										<input type="radio" name="credit_company" value="visa">
										<label for="credit_company">VISA</label>
										<input type="radio" name="credit_company" value="mastercard">
										<label for="credit_company">MasterCard</label>
										<input type="radio" name="credit_company" value="jcb">
										<label for="credit_company">JCB</label>
										<input type="radio" name="credit_company" value="americanexpress">
										<label for="credit_company">AMERICANEXPRESS</label>
									</dd>
								</dl>

								<dl>
									<dt><label for="credit_no">クレジットカード番号</label></dt>
									<dd>
										<input type="text" name="credit_no" value="" id="credit_no">
										※半角英字、ハイフン(-)なしで入力してください。
									</dd>
								</dl>

								<dl>
									<dt><label for="credit_name">名義人</label></dt>
									<dd>
										<input type="text" name="credit_name" value="" id="credit_no">
										※半角数字、カード表記通りに入力してください。
									</dd>
								</dl>

								<dl>
									<dt>有効期限</dt>
									<dd>
										<select id="credit_month" name="">
											<option value="">--</option>
			<?php
				for( $csm = 1; $csm < 12; $csm++ ){
					echo "<option value='" . $csm . "'>" . $csm . "</otion>";
				}
			?>
										</select>
										<label for="credit_month">月</label>

										<select id="credit_year" name="">
											<option value="">--</option>
			<?php
				for( $csy = 15; $csy <= 25; $csy++ ){
					echo "<option value='" . $csy . "'>" . $csy . "</option>";
				}
			?>
										</select>
										<label for="credit_year">年</label>
									</dd>
								</dl>

								<dl>
									<dt><label for="credit_scode">セキュリティーコード</label></dt>
									<dd>
										<input type="password" name="credit_scode" value="" id="credit_scode">
										※カードの裏もしくは表に印刷されている3桁もしくは4桁の半角数字を入力してください。
									</dd>
								</dl>
							</div>
							<!-- ▲クレジット -->

						</fieldset>
						<!-- ▲お支払方法選択 -->



						<!-- ボタン -->
						<button type="submit">確認へ進む</button>


					</form>

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
