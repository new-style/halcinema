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
		<link rel="stylesheet" href="../../css/Base/normalize.css">
		<link rel="stylesheet" href="../../css/Base/base.css">
		<link rel="stylesheet" href="../../css/font-awesome.css">

		<link rel="stylesheet" href="../../css/layout.css">
		<link rel="stylesheet" href="../../css/Common/common.css">
    <link rel="stylesheet" href="../../css/Reserve/step1.css">

	</head>
	<body>
		<div class="l-wrapper">
			<!-- ヘッダー -->
<?php
	require_once "../parts/header.html";
?>

			<main class="l-content">
				<!-- ▼パンくず -->
				<ul class="stepBar step4">
						<li class="step current btn">Step1<span>購入枚数と座席<br/>を選択してください。</span></li>
            <li class="step btn">Step2<span>お客様情報とお支払情報<br/>を入力してください。</span></li>
            <li class="step btn">Step3<span>購入内容の確認</span></li>
            <li class="step btn">Step4<span>予約完了</span></li>
				</ul>
				<!-- ▲パンくず -->

				<!-- ▼コンテンツ -->
				<article class="border_Solid">
          <div class="title_Box text_Center border_Solid">
            <h1>Step1</h1>
            <p>購入枚数と座席を選択してください。</p>
          </div>
          <form action="" method="post">
            <!-- ▼購入枚数選択 -->
            <fieldset>
              <legend>購入枚数選択<span>※最大2枚まで購入可能です。</span></legend>
              <dl>
                <dt>一般</dt>
                <dd>
                  <select class="" name="">
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd>1800円</dd>
              </dl>
              <dl>
                <dt>大学生・高校生</dt>
                <dd>
                  <select class="" name="">
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd>1500円</dd>
              </dl>
              <dl>
                <dt>中学生・小学生</dt>
                <dd>
                  <select class="" name="">
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd>1000円</dd>
              </dl>
              <dl>
                <dt>3歳以下</dt>
                <dd>
                  <select class="" name="">
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd>500円</dd>
              </dl>
              <dl>
                <dt>合計</dt>
                <dd>

                  枚
                </dd>
                <dd>円</dd>
              </dl>
            </fieldset>
            <!-- ▲購入枚数選択 -->
            <!-- ▼座席選択 -->
            <fieldset>
              <legend>座席選択<span>※緑に店頭しているシートは3歳以下のお子様がいらっしゃいます。</span></legend>
            </fieldset>
            <!-- ▲座席選択 -->
            <!-- ▼予約に進む -->
            <fieldset>
              <legend>ログインして予約する</legend>
              <legend>新規会員登録をして予約する</legend>
              <legend>支払い方法選択へ進む</legend>
            </fieldset>
            <!-- ▲予約に進む -->
          </form>
				</article>
				<!-- ▲コンテンツ -->
			</main>

 <!-- フッター -->
<?php
	require_once "../parts/footer.html";
?>
		</div>
	</body>
</html>
<!-- ▲表示▲ -->
