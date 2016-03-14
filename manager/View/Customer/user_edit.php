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
  $id = $_GET['id'];
  echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 顧客管理 | 顧客設定</title>
    <!-- 定義 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <!-- 読み込み -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/style.css">
    <script ></script>

</head>
<body>

    <div class="container">
<?php
require_once("./../parts/header.php");
?>

        <article class="row">
<?php
require_once("./../parts/side.php");
?>
            <section class="col-md-10">
                <h1>顧客管理</h1>

                <div class="search_list">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">ユーザ情報変更</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
try{
    $sql = "select * from hal_tanaka where id=".$id."";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
    echo '<tr>
            <td>お名前</td>
            <td><form action="sys_user_edit.php?name=name&id='.$id.'" method="post"><input type="text" name="edit" value="'.$row['name'].'"></td>
            <td><button class="btn btn-default">変更</button></form></td>
          </tr>
          <tr>
            <td>現在のパスワード入力</td>
            <td><form action="sys_user_edit.php?name=password&id='.$id.'" method="post"><input type="text" name="old_pass"></td>
            <td></td>
          </tr>
          <tr>
            <td>新しいパスワード</td>
            <td><input type="text" name="edit"></td>
            <td><button class="btn btn-default">変更</button></form></td>
          </tr>
          <tr>
            <td>メールアドレス</td>
            <td><form action="sys_user_edit.php?name=mail_address&id='.$id.'" method="post"><input type="text" name="edit" value="'.$row['mail_address'].'"></td>
            <td><button class="btn btn-default">変更</button></form></td>
          </tr>
          <tr>
            <td>お住まい</td>
            <td><form action="sys_user_edit.php?name=prefectures&id='.$id.'" method="post"><input type="text" name="edit" value="'.$row['prefectures'].'"></td>
            <td><button class="btn btn-default">変更</button></form></td>
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
                </div><!-- /.search_list -->
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>
    </div>

</body>
</html>
