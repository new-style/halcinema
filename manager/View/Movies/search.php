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
    <title>HALシネマ管理者 | 映画管理一覧</title>
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
                <h1>映画管理</h1>
                <div class="btn btn-success"><a href="create.php" style="color: #fff;">新規追加</a></div>
                <div class="search_list">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>画像</th>
                                <th>情報変更</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            try{
                                $sql = "select * from hal_movie";
                                $stmh = $pdo -> prepare($sql);
                                $stmh -> execute();
                                while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
                                    echo '<tr>
                                            <td width="50px">'.$row['movie_id'].'</td>
                                            <td width="70px">'.$row['movie_id'].'</td>
                                            <td>'.$row['movie_title'].'</td>
                                            <td width="250px"><img src="../../img/'.$row['movie_img'].'"></td>
                                            <td width="200px">
                                                <a href="http://127.0.0.1/halcinema/manager/View/Movies/change.php?id='.$row['movie_id'].'" class="btn btn-warning btn-sm">変更</a>
                                                <a href="http://127.0.0.1/halcinema/manager/View/Movies/remove.php?id='.$row['movie_id'].'" class="btn btn-danger btn-sm">削除</a>
                                            </td>
                                         </tr>';
                                }
                            }catch(PDOException $e){
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
