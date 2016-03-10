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
		<script src="../../js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript">
			$(function(){

				$('.pass').change(function(){
					var pass = $('.pass').val();
					var passConf = $('.passConf').val();
					console.log(pass);
					console.log(passConf);
					if( pass != passConf ){
						$('.passError span').html('<small class="errorText">パスワードが一致しません。</small>');
					}
					else{
						$('.errorText').remove();
					}
				});

				$('.passConf').change(function(){
					var pass = $('.pass').val();
					var passConf = $('.passConf').val();
					console.log(pass);
					console.log(passConf);
					if( pass != passConf ){
						$('.passError span').html('<small class="errorText">パスワードが一致しません。</small>');
					}
					else{
						$('.errorText').remove();
					}
				});
			});
		</script>

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
					<li><a href="http://127.0.0.1/halcinema/View/Shop/shop_index.php">HALシネマ</a></li>
					<li><a href="http://127.0.0.1/halcinema/View/Adduser/confirm.php">会員情報入力</a></li>
				</ul>
				<!-- ▲パンくず -->

				<article>

					<!-- ▼ステップバー -->
					<ul class="stepBar step3">
							<li class="step current btn">Step1<span>お客様情報とお支払方法<br/>を入力してください。</span></li>
							<li class="step btn">Step2<span>お客様情報とお支払情報<br/>を確認してください。</span></li>
							<li class="step btn">Step3<span>登録完了</span></li>
					</ul>
					<!-- ▲ステップバー -->

					<!-- ▼コンテンツ -->
					<h1>新規会員登録</h1>

						<form class="" action="confirm.php" method="post">
							<!-- ▼お客様情報 -->
							<fieldset class="userAddList">
								<legend class="text_Center">お客様情報入力<span>全ての項目に入力してください。</span></legend>

								<dl>
									<dt><span>*</span>ユーザネーム</dt>
									<dd>
										<input type="text" name="user_name" pattern="^[0-9A-Za-z]+$">
										<small>*半角英数</small>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>ユーザID</dt>
									<dd>
										<input type="text" name="user_id" pattern="^[0-9A-Za-z]+$">
										<small>*半角入力6字~12字</small>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>メールアドレス</dt>
									<dd>
										<input type="text" name="mail_address">
										<small>*半角英数</small>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>パスワード</dt>
									<dd>
										<input class="pass" type="password" name="password" value="">
										<small>*半角英数6字~20字</small>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>パスワード確認</dt>
									<dd class="passError">
										<input class="passConf" type="password" name="password_conf" value="">
										<small>*半角英数6字~20字</small>
										<span></span>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>お名前</dt>
									<dd id="nameAdd" class="float_C">
										<span>性</span><input type="text" name="last_name">
										<span>名</span><input type="text" name="first_name" ><br>
										<span>セイ</span><input type="text" name="last_name_kana">
										<span>メイ</span><input type="text" name="first_name_kana">
									</dd>

								</dl>

								<dl>
									<dt><span>*</span>電話番号</dt>
									<dd>
										<input type="text" name="tel">
										<small>*半角ハイフン無し　例)0901234567</small>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>性別</dt>
									<dd id="seibetu">
										<input type="radio" name="sex" value="男性" id="male"><label for="male">男</label>
										<input type="radio" name="sex" value="女性" id="female"><label for="female">女</label>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>生年月日</dt>
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
						echo "<option value='" . $sm . "'>" . $sm . "</option>";
					}
				?>
										</select>
										<label for="month">月</label>
										<select class="day" name="day">
											<option value="">--</option>
				<?php
					for( $sd = 1; $sd <= 31; $sd++ ){
						echo "<option value='" . $sd . "'>" . $sd . "</option>";
					}
				?>
										</select>
										<label for="day">日</label>
									</dd>
								</dl>

								<dl>
									<dt><span>*</span>都道府県</dt>
									<dd>
										<select name="pref_id" class="pref_id">
											<option value="北海道">北海道</option>
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
							<fieldset class="payWrap">
								<legend class="text_Center">お支払方法選択<span>※支払い方法を選択し、全ての項目に入力してください。</span></legend>

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
											<input type="radio" name="credit_company" value="visa" id="credit_visa">
											<label for="credit_visa">VISA</label>
											<input type="radio" name="credit_company" value="mastercard" id="credit_mastercard">
											<label for="credit_mastercard">MasterCard</label>
											<input type="radio" name="credit_company" value="jcb" id="credit_jcb">
											<label for="credit_jcb">JCB</label>
											<input type="radio" name="credit_company" value="americanexpress" id="credit_americanexpress">
											<label for="credit_americanexpress">AMERICANEXPRESS</label>
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


							<!-- ▼メルマガ登録 -->
							<fieldset class="mailMagazine">
								<legend class="text_Center">メルマガ登録</legend>

								<p>HALシネマのメルマガの配信を希望する</p>

								<input type="radio" name="mailmagazine" id="mailY" checked=""><label for="mailY">希望する</label>
								<input type="radio" name="mailmagazine" id="mailN"><label for="mailN">希望しない</label>

							</fieldset>
							<!-- ▲メルマガ登録 -->

							<!-- ▼利用規約 -->
							<fieldset>
								<legend class="text_Center">利用規約</legend>
								<p class="kiyaku">当社における個人情報の取り扱いについて

株式会社松竹マルチプレックスシアターズ（以下「当社」といいます）は、個人情報の保護について、その社会的責任を果たすとともに、皆様に安心、信頼していただける企業であるよう、「個人情報保護指針」を定め、役職員に遵守させています。お預かりいたしました皆様の個人情報は、当社にて厳重に管理させていただきますが、以下においては、当社において収集、利用させていただく皆様の個人情報を具体的にどのように取り扱わせていただくかについて説明させていただきます。

|個人情報の利用目的の範囲

1.お客様の個人情報
当社では、お客様からチケットや商品のご購入、販売促進キャンペーンや特典へのご応募、または当社の各種サービスへのお申込などを行っていただく場合がございます。そのような場合にお客様から頂きました個人情報は、原則として次の利用目的の範囲においてのみ利用させていただきます。なお、以下に記載のない場合においては、個人情報をお預かりする際に、利用目的をお知らせいたします。また、個人情報をお預かりする際に、以下の記載と異なる利用目的をお知らせした場合は、当該お知らせした利用目的の範囲内においてのみ利用させていただきます

種別	利用目的
松竹マルチプレックスシアターズ・メンバーズ／SMT Members	
・会員制度に関する告知・案内
・会員特典の付与
・メールマガジンの配信
・アンケートの実施
・各種統計処理
インターネットチケット購入	
・チケットの販売に関する事項
・各種統計処理
アンケート	
・ご意見、ご質問等への回答
・各種統計資料
・当選品等がある場合には、その発送
キャンペーン	
・抽選、当選時の景品の発送
・各種統計処理
2.採用応募者の個人情報
当社にて実施しております採用活動に対し、ご応募いただきました方々の個人情報につきましては、次の利用目的の範囲においてのみ利用させていただきます。

種別	利用目的
採用応募者の個人情報	
・採用結果の通知
|個人情報の第三者への提供

お預かりした個人情報は、次の場合を除き、第三者へ提供することはございません。

・予めご同意をいただいている場合
・法令等に基づき必要と判断された場合
・個人情報にて特定されるご本人または公共の利益のために必要と思われる場合
・お客様からのお問合せにつきまして、内容により直接担当しているグループ会社からの回答が適切と判断した場合
※お預かりした個人情報を、個人を特定することができない形に加工した統計処理用のデータとして、映画の配給元、共同製作者等に提供する場合があります。
※お預かりした個人情報は、景品等の発送業務等の委託のため、委託先に開示する場合がございます。詳しくは、「個人情報の取り扱いの外部委託」の項目をご覧ください。
|個人情報の共同利用

お預かりした個人情報を、グループ会社または第三者との間で共同利用する場合には、予めその旨並びに共同利用の対象となる個人情報、共同利用を行う者の範囲、利用目的等をお知らせします。

|個人情報の取り扱いの外部委託

お預かりした個人情報は、商品、チケット、会報誌の発送業務等の委託のため、委託先に開示する場合がございます。また、アンケートの実施、その他マーケティング活動にあたり、個人情報の収集、分析を第三者に委託する場合がございます。当社の委託を受けて個人情報を取り扱う外部委託先につきましては、秘密保持等に関する契約を締結するなどして、厳重な管理を行わせています。

|個人情報の内容および不同意時の取り扱い

個人情報の収集にあたりましては、原則として利用目的を達成するために必要な範囲の内容を収集させていただきます。なお、当社に対する個人情報の提供は任意でございますが、必要事項をご提供いただけない場合には、サービスのご利用、ご入会等をお断りすることがございますので、予めご了承ください。

|個人情報の開示、訂正等、利用停止等

法令に基づく個人情報の開示、訂正等（訂正、追加、削除）、利用停止等（利用停止、中止）のご請求があった場合、当社の定める方法によりご本人からのご請求であることを確認させていただきました後、当社業務に支障のない範囲内で対応いたします。なお、ご要望にお答えできない場合には、その理由を説明させていただきます。これらのご請求につきましては、以下の窓口までご連絡ください。 なお、利用目的を達成した個人情報につきましては、一定期間経過後に削除させていただく場合がございます｡この場合、削除されました個人情報の開示、訂正等のお申し出をいただきましても対応しかねますので、予めご了承ください。

株式会社松竹マルチプレックスシアターズ　個人情報お客様相談窓口
電子メール：club-member-info@movix.co.jp
|個人情報に関する苦情・相談

当社における個人情報の取り扱いに関する苦情、ご相談につきましては、上記「個人情報の開示、訂正等、利用停止等」における各窓口で承ります。

|クッキー(Cookies)について

当社のウェブサイトではクッキーを使用する場合があります。クッキーとは、個人情報の代わりに任意の文字が書かれた小さなテキストファイルのことで、ウェブサイトを訪問した時に、ウェブサイトのウェブサーバーとお客様のインターネット閲覧ソフト（ブラウザ）との間でやりとりし、お客様のコンピュータのハードディスクドライブに保存されるものです。
このクッキー情報には、ユーザーを特定する情報は一切含まれず、クッキーに書かれた文字を活用することで、より適切なサービス・コンテンツをお客様にご提供することができます。
お客様のブラウザの設定により、事前にクッキー使用サイトであることを表示したり、受け取りを拒否することができます。お客様がクッキーを使用しない設定としている場合、当ウェブサイトで使用できる機能については制限される可能性がありますのでご了承下さい。なお、これらの機能に関する情報は、ご使用のブラウザの「ヘルプ」をご覧下さい。
また、当社のウェブサイト上において、広告の配信を委託している会社、または広告を出稿している広告主などが、アクセス状況の計測や効率的な配信を目的としてのみ、クッキーを使用している場合があります。
それらのクッキーは、各社のプライバシーポリシーに従って管理されており、 利用者の皆さまの意思により、オプトアウト（クッキー機能を停止）することができます。

方法は下記リストにあるリンク先よりご確認ください。

アイメディアドライブ	http://i-mdrive.co.jp/privacy/cookie/
プラットフォーム・ワン	http://www.platform-one.co.jp/cookie/index.html
サイバー・コミュニケーションズ	http://www.ad-just.jp/privacy/bta.html
グーグル	https://www.google.com/settings/ads/
|アクセスログ・ファイルについて

当社ウェブサイトの利用傾向の分析、サイトの管理、ユーザー動向の探知、また集合的な使用の為の幅広い人口統計学的情報の収集に関してアクセスログ・ファイルを使用します。これにより、当社は訪問されたページ、ページ滞在時間、サイトにアクセスする直前の場所、ユーザーのページ移動遷移の傾向ならびにブラウザおよびオペレーティング・システム等についての統計的なサイト利用情報を得ることができますが、個人情報の収集のために利用することはありません。

|リンク

当社ウェブサイトは、いくつかの外部サイトへのリンクを含みますが、プライバシー情報を共有するものではありません。リンク先ウェブサイトにて行われる個人情報の収集に関しては当社では一切責任を負えませんので、リンク先ウェブサイトの個人情報取扱内容を必ずご参照下さい。

|各規約等との関係

当社は、商品の販売またはサービスの提供等にあたり個別に規約、規定等を定めさせていただく場合があります。その場合、上記の内容が当該規約、規定等に定める事項と異なるときは、その異なる範囲において当該規約、規定等に定める事項が優先します。

|説明内容の変更について

上記に説明させていただきました内容は変更されることがあります。その場合、変更事項は、当社ウェブサイトに掲載し告知いたします。定期的にご確認下さいますようお願い申し上げます。

|変更・更新に関するお知らせ

2014年4月2日に更新されました。</p>
							</fieldset>
							<!-- ▲利用規約 -->



							<!-- ボタン -->
							<button type="submit" style="color: #000;">確認へ進む</button>


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
