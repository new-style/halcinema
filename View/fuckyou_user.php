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
  $password = $_POST['password'];

  echo $password;

//プレースホルダを用いたセキュアなSQL
$sql = "SELECT * FROM hal_tanaka";

//ステートメントハンドラの取得
$stmt = $pdo -> prepare($sql);

// SQL実行
$stmt -> execute();

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

        <article class="row">
            <section>
                <div class="search_list">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th colspan="6" style="text-align: center;">ユーザ情報</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
try{
    $sql = "select * from hal_tanaka where password ='$password'";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
    echo '<tr>
            <td>id</td>
            <td>'.$row['user_id'].'</td>
          </tr>
          <tr>
            <td>名前</td>
            <td>'.$row['name'].'</td>
          </tr>
          <tr>
            <td>メールアドレス</td>
            <td>'.$row['mail_address'].'</td>
          </tr>
          <tr>
            <td>お住まい</td>
            <td>'.$row['prefectures'].'</td>
          </tr>';
  }
  catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }
                            ?>
                        </tbody>
                    </table>

                    <h2 style="text-align: center;">このユーザを削除しますか？</h2>
                    <div class="col-md-6 delete_conf_btn">
                      <button class="btn btn-primary col-md-12"><a href="fuckyou.php">いいえ</a></button>
                    </div>
                    <div class="col-md-6 delete_conf_btn">
                      <form action="sys_fuckyou_remove.php?id=<?php echo $id ?>" method="post">
                        <button class="btn btn-primary col-md-12">はい</button>
                      </form>
                    </div>
                </div><!-- /.search_list -->
            </section>
        </article>

<?php
require_once("parts/footer.html");
?>
    </div>

</body>
</html>
