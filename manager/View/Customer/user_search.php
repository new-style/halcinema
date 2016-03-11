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
                                <th>No</th>
                                <th>ID</th>
                                <th>名前</th>
                                <th>アカウント変更</th>
                                <th>削除</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
try{
    $sql = "select * from hal_tanaka";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
        echo '<tr><a href="#">
                <td>'.$row['id'].'</td>
                <td>'.$row['user_name'].'</td>
                <td>'.$row['name'].'</td>
                <td><a href="'.$row['id'].'" class="btn btn-warning btn-sm">変更</a></td>
                <td><a href="user_delete.php?id='.$row['id'].'" class="btn btn-default btn-sm">削除</a></td>
              </a></tr>';
    }
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
