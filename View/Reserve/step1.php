<?php 
  session_start();
  $dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
  $dbUser = "root";
  // windowsの人はrootではなく空("")にしてください。
  $dbPass = "root";

  $pdo = new PDO ($dsn, $dbUser, $dbPass);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //設定②SQLインジェクション対策
  $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $flg = false;
  $ticketId = '';
  if(isset($_GET['ticket'])){
    $ticketId = $_GET['ticket'];
    $_SESSION['ticket'] = $ticketId;
  }
  try{
    $sql = "select * from hal_movie";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    echo '<br>'.$ticketId;
    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
      if($row['movie_id'] == $ticketId){
        $flg = true;
        $_SESSION['movie_title'] = $row['movie_title'];
        $_SESSION['cast'] = $row['cast'];
        $_SESSION['kantoku'] = $row['kantoku'];
        $_SESSION['scenario'] = $row['scenario'];
        $_SESSION['staff'] = $row['staff'];
        $_SESSION['movie_img'] = $row['movie_img'];
        break;
      }
    }

    $sql = "select * from hal_tanaka where  name='山田'";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
    $_SESSION['userId'] = $row['id'];
    $_SESSION['userName'] = $row['name'];
    $_SESSION['userMail'] = $row['mail_address'];
    print_r($row);
  }
  catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }
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
    <!-- 読み込み -->
    <link rel="stylesheet" href="../../css/Base/normalize.css">
    <link rel="stylesheet" href="../../css/Base/base.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">

    <link rel="stylesheet" href="../../css/layout.css">
    <link rel="stylesheet" href="../../css/Common/common.css">
    <link rel="stylesheet" href="../../css/Reserve/step1.css">

    <script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../js/step1_script.js"></script>

  </head>
  <body>
    <div class="l-wrapper">
      <!-- ▼ヘッダー -->
<?php
  require_once "../parts/header.html";
?>
			<main class="l-content">

				<!-- ▼パンくず -->
<!-- 				<ul class="l-breadclumb">
					<li><a href="#">HOME</a></li>
					<li><a href="#"></a></li>
				</ul> -->
				<!-- ▼パンくず -->

				<!-- <h1>チケット予約</h1> -->

				<!-- ▼ステップバー -->
				<ul class="stepBar step4">
						<li class="step current btn">Step1<span>購入枚数と座席<br/>を選択してください。</span></li>
            <li class="step btn">Step2<span style="margin-left: 15px;">お客様情報と<br/>お支払情報を入力してください。</span></li>
            <li class="step btn">Step3<span>購入内容のご確認</span></li>
            <li class="step btn">Step4<span>予約完了</span></li>
				</ul>
				<!-- ▲ステップバー -->

				<!-- ▼コンテンツ -->
				<article class="border_Solid back">
          <div class="title_Box text_Center border_Solid">
            <h2>Step1</h2>
            <p>購入枚数と座席を選択してください。</p>
          </div>
          <form action="step2.php" method="post">
          <!-- <form action="../../system/reserve.php" method="post"> -->
            <!-- ▼購入枚数選択 -->
            <fieldset class="back">
              <legend class="text_Center">購入枚数選択<span>※最大2枚まで購入可能です。</span></legend>
              <dl>
                <dt>一般</dt>
                <dd class="l-select">
                  <select name="human_General">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd class="l-price">1800円</dd>
              </dl>
              <dl>
                <dt>大学生・高校生</dt>
                <dd class="l-select">
                  <select class="" name="human_Large">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd class="l-price">1500円</dd>
              </dl>
              <dl>
                <dt>中学生・小学生</dt>
                <dd class="l-select">
                  <select class="" name="human_Little">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd class="l-price">1000円</dd>
              </dl>
              <dl>
                <dt>3歳以下</dt>
                <dd class="l-select">
                  <select class="" name="human_min">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  枚
                </dd>
                <dd class="l-price">500円</dd>
              </dl>
              <dl>
                <dt>合計</dt>
                <dd class="l-select">
                  0枚
                </dd>
                <dd class="l-price">0円</dd>
              </dl>
            </fieldset>
            <!-- ▲購入枚数選択 -->




            <!-- ▼座席選択 -->
            <fieldset class="back">
              <legend>座席選択<span>※緑に店頭しているシートは3歳以下のお子様がいらっしゃいます。</span></legend>
              <div class="sheetWrap">
                <div class="screen"><span>スクリーン</span></div>
              <?php 
                $sheetName = Array("A","B","C","D","E","F","G");
                for($i = 0; $i<7;$i++){
              ?>
                <div class="sheetA">
                  <div class="sheet diamond1"><input type="hidden" value="0"></div>
                  <div class="sheet diamond1"><input type="hidden" value="1"></div>
                  <div class="sheetName"><p><?php echo $sheetName[$i] ?></p><input type="hidden" value="<?php echo $sheetName[$i] ?>"></div>
                  <div class="sheet"><input type="hidden" value="2"></div>
                  <div class="sheet"><input type="hidden" value="3"></div>
                  <div class="sheet"><input type="hidden" value="4"></div>
                  <div class="sheet"><input type="hidden" value="5"></div>
                  <div class="sheetName"><p><?php echo $sheetName[$i] ?></p><input type="hidden" value="<?php echo $sheetName[$i] ?>"></div>
                  <div class="sheet diamond2"><input type="hidden" value="6"></div>
                  <div class="sheet diamond2"><input type="hidden" value="7"></div>
                </div>
              <?php 
                }
              ?>
              </div>
            </fieldset>
            <!-- ▲座席選択 -->

            <div class="buySelectWrap float_C">
              <!-- ▼予約に進む -->
              <fieldset class="loginBuy back">
                <legend>ログインして予約する</legend>
                <label for="id">ID</label><input type="text" id="id" name="id">
                <label for="password">PASSWORD</label><input type="password" id="password" name="password">
                <button type="submit">ログインして支払方法選択へ進む</button>
              </fieldset>
              <!-- ▲予約に進む -->


              <div class="signUpByWrap">
                <!-- ▼予約に進む -->
                  <fieldset class="signUpBuy back">
                      <legend>新規会員登録をして予約する</legend>
                      <div class="signUpBtn"><span>新規会員登録</span></div>
                  </fieldset>
                  <!-- ▲予約に進む -->

                  <fieldset class="signUpBuy back">
                    <legend>会員登録をしないで予約する</legend>
                      <div class="signUpBtn"><span>支払い選択へ進む</span></div>
                  </fieldset>
                <!-- ▲予約に進む -->
              </div>

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
  <?php 
    if(isset($_GET['id'])){
  ?>
    <script>
      alert('シートを選択してください。');
    </script>
  <?php
    }
  ?>
	</body>
</html>
<!-- ▲表示▲ -->