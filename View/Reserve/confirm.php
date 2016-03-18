<?php
	session_start();
	$phoneCarrier = $_POST['carrier'];
	$conveni = $_POST['conveni'];
	$creditCompany = $_POST['credit_company'];
	$creditNo = $_POST['credit_no'];
	$creditName = $_POST['credit_name'];
	$creditMonth = $_POST['credit_month'];
	$creditYear = $_POST['credit_year'];
	$creditScode = $_POST['credit_scode'];
	// echo $phoneCarrier;
	$_SESSION['phoneCarrier'] = $phoneCarrier;
	// echo '<br>';
	// echo $conveni;
	$_SESSION['conveni'] = $conveni;
	// echo '<br>';
	// echo $creditCompany;
	$_SESSION['creditCompany'] = $creditCompany;
	// echo '<br>';
	// echo $creditNo;
	$_SESSION['creditNo'] = $creditNo;
	// echo '<br>';
	// echo $creditName;
	$_SESSION['creditName'] = $creditName;
	// echo '<br>';
	// echo $creditMonth;
	$_SESSION['creditMonth'] = $creditMonth;
	// echo '<br>';
	// echo $creditYear;
	$_SESSION['creditYear'] = $creditYear;
	// echo '<br>';
	// echo $creditScode;
	$_SESSION['creditScode'] = $creditScode;

	echo date('Y-m-d');
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
			<li class="step btn">Step2<span>お客様情報とお支払情報<br/>を入力してください。</span></li>
			<li class="step current btn">Step3<span>購入内容のご確認</span></li>
			<li class="step btn">Step4<span>予約完了</span></li>
	</ul>
	<!-- ▲パンくず -->

	<!-- ▼コンテンツ -->
	<article class="border_Solid">
		<div class="title_Box text_Center border_Solid">
			<h1>Step3</h1>
			<p>購入内容のご確認</p>
		</div>
		<form action="../../system/reserve.php" method="post">
			<fieldset>
				<legend class="text_Center">購入確認</legend>
				<div>
					<?php 
						echo $_SESSION['movie_title'];
					?>
				</div>

			</fieldset>
<!-- 

			<fieldset>
				<legend class="text_Center">シート確認<span>緑に店頭しているシートは3歳以下のお子様がいらっしゃいます。</span></legend>
			</fieldset> -->
			<!-- ボタン -->

			<fieldset>
				<legend class="text_Center">お客様情報確認</legend>
				<div>
					<?php
						echo $_SESSION['userName'];
					?>
				</div>
			</fieldset>

			<fieldset>
				<legend class="text_Center">お支払情報確認</legend>
				<?php 
					echo $phoneCarrier;
					echo '<br>';
					echo $conveni;
					echo '<br>';
					echo $creditCompany;
					echo '<br>';
					echo $creditNo;
					echo '<br>';
					echo $creditName;
					echo '<br>';
					echo $creditMonth;
					echo '<br>';
					echo $creditYear;
				?>
			</fieldset>
			<!-- ボタン -->


			<!-- ボタン -->
			<div class="">
				<button type="submit">購入</button>
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
