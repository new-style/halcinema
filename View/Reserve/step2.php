<?php 
session_start();
	if(!isset($_POST['sheetNo'])){
		header('Location: step1.php?id=1');
	}
	if($_POST['id'] == null){
		// echo "a";
		header('Location: step1.php');
		exit();
	}

	$id = $_POST['id'];
	$passwd = $_POST['password'];

	$price = Array(1800,1500,1000,500);
	$ippan = $price[0] * $_POST['human_General'];
	$daigaku = $price[1] * $_POST['human_Large'];
	$syougaku = $price[2] * $_POST['human_Little'];
	$child = $price[3] * $_POST['human_min'];
	// 配列で受け取れる
	$sheetNo = $_POST['sheetNo'];

	// print_r ($a);
	// echo $ippan * $price[0] + $daigaku * $price[1] + $syougaku * $price[2] + $child * $price[3];


// 次はセッションに値を入れて持ちならが確認ページに行く
	$_SESSION['id'] = $id;
	$_SESSION['passwd'] = $passwd;
	$_SESSION['ippan'] = $ippan;
	$_SESSION['daigaku'] = $daigaku;
	$_SESSION['syougaku'] = $syougaku;
	$_SESSION['child'] = $child;
	$_SESSION['sheetNo'] = $sheetNo;

	// echo $_SESSION['id'];


	$dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
	$dbUser = "root";
	// windowsの人はrootではなく空("")にしてください。
	$dbPass = "root";


	//PDOによるDB接続
	$pdo = new PDO ($dsn, $dbUser, $dbPass);

	//PDOの動作設定
	//設定①エラーメッセージは黙殺しないで例外を吐かせる！
	//エラーモードをエクセプションモードにしなさい！
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//設定②SQLインジェクション対策
	$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	$flg = false;
try{
	$sql = "select * from hal_tanaka";
	$stmh = $pdo -> prepare($sql);
	$stmh -> execute();

	while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
		if($row['user_id'] == $id && $row['password'] == $passwd){
			$flg = true;
			$_SESSION['name'] = $row['name'];
			$_SESSION['no'] = $row['id'];
			break;
		}
	}
	if(!$flg){
		header('Location: step1.php?aa="111"');
	}


}
catch(PDOException $e){
	echo "エラーだぉ";
	echo "<br>【エラーメッセージ】<br>";
	echo $e -> getMessage();
	echo "<br	>【エラーコード】<br>";
	echo $e -> getCode();

}

	// if()
	// $sql = "insert into reserve values(:id,:name)";


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
    <link rel="stylesheet" href="../../css/Reserve/step1.css">
		<!-- JS読み込み -->
		<script src="../../js/jquery-1.11.0.min.js"></script>

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ▼ヘッダー -->
<?php
	require_once "../parts/header.php";
?>

<main class="l-content">
	<!-- ▼パンくず -->
	<ul class="stepBar step4">
			<li class="step btn">Step1<span>購入枚数と座席<br/>を選択してください。</span></li>
			<li class="step current btn">Step2<span>お客様情報とお支払情報<br/>を入力してください。</span></li>
			<li class="step btn">Step3<span>購入内容のご確認</span></li>
			<li class="step btn">Step4<span>予約完了</span></li>
	</ul>
	<!-- ▲パンくず -->

	<!-- ▼コンテンツ -->
	<article class="border_Solid">
		<div class="title_Box text_Center border_Solid">
			<h1>Step2</h1>
			<p>お客様情報の入力、お支払方法の選択をしてください。</p>
		</div>
		<form action="confirm.php" method="post">
			<!-- ▼お客様情報入力 -->
			<!-- <fieldset>
				<legend class="text_Center">お客様情報入力<span>全ての項目に入力してください。</span></legend>

				<dl>
					<dt>氏名</dt>
					<dd>
						<label for="familyname">姓</label><input type="text" name="nameFamily" value="" id="familyname">
						<label for="firstname">名</label><input type="text" name="nameFirst" value="" id="firstname">
					</dd>
				</dl>

				<dl>
					<dt>フリガナ</dt>
					<dd>
						<label for="f_familyname">セイ</label><input type="text" name="furiFamily" value="" id="f_familyname">
						<label for="f_firstname">メイ</label><input type="text" name="furiFirst" value="" id="f_firstname">
					</dd>
				</dl>

				<dl>
					<dt>
						性別
					</dt>
					<dd>
						<input type="radio" name="sex" value="male" id="male"><label for="male">男性</label>
						<input type="radio" name="sex" value="female" id="female"><label for="female">女性</label>
					</dd>
				</dl>

				<dl>
					<dt>
						生年月日
					</dt>
					<dd>
						<select id="year" name="year">
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
					<dt>
						<label for="pref_id">都道府県</label>
					</dt>
					<dd>
						<select name="pref_id" id="pref_id">
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

				<dl>
					<dt>
						<label for="tel">電話番号</label>
					</dt>
					<dd>
						<input type="text" name="tel" value="" id="tel">
					</dd>
				</dl>

				<dl>
					<dt>
						<label for="mail_address">メールアドレス</label>
					</dt>
					<dd>
						<input type="text" name="mail_address" value="" id="mail_address">
					</dd>
				</dl>

			</fieldset> -->
			<!-- ▲お客様情報入力 -->




			<!-- ▼お支払方法選択 -->
			<fieldset id="lastForm">
				<legend>お支払方法選択<span>※支払い方法を選択し、全ての項目に入力してください。</span></legend>

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
							<input type="radio" name="conveni" value="seven" id="seven">
							<label for="seven">セブンイレブン</label>
							<input type="radio" name="conveni" value="famima" id="famima">
							<label for="famima">ファミリーマート</label>
							<input type="radio" name="conveni" value="lawson" id="lawson">
							<label for="lawson">ローソン</label>
							<input type="radio" name="conveni" value="sankus" id="sankus">
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
							<select id="credit_month" name="credit_month">
								<option value="">--</option>
<?php
	for( $csm = 1; $csm < 12; $csm++ ){
		echo "<option value='" . $csm . "'>" . $csm . "</otion>";
	}
?>
							</select>
							<label for="credit_month">月</label>

							<select id="credit_year" name="credit_year">
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
			<!-- <button type="submit" class="">確認へ進む</button> -->


		</form>
	</article>
	<!-- ▲コンテンツ -->
</main>


		<!-- ▼フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
		<?php 
			for($i = 0;$i<count($sheetNo);$i++){
		?>
			<script>
				$('#lastForm').append('<input type="hidden" name="sheetNo[]" value="<?php echo $sheetNo[$i]; ?>">');
			</script>
		<?php
			}
		 ?>

	</body>
</html>
<!-- ▲表示▲ -->
