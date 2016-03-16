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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 映画情報変更</title>
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
                <h1>映画情報削除</h1>

                <div class="detail">
                  <p>以下の内容を削除します。</p>
                  <form class="" action="" method="post">
                    <button type="submit" class="btn btn-info btn-lg"><a href="#" style="color: #fff;">戻る</a></button>
                    <button type="submit" class="btn btn-danger btn-lg"><a href="sys_movie_delete.php?id=<?php echo $id; ?>" style="color: #fff;">削除</a></button>

                    <table class="table table-bordered">
                        <tbody>
                        <?php
                            try{
                                $sql = "select * from hal_movie where movie_id = ".$id;
                                $stmh = $pdo -> prepare($sql);
                                $stmh -> execute();
                                $row = $stmh -> fetch(PDO::FETCH_ASSOC);
                                  echo '<tr>
                                          <td>No</td>
                                          <td>'.$row['movie_id'].'</td>
                                       </tr>
                                       <tr>
                                          <td>ID</td>
                                          <td>0000'.$row['movie_id'].'</td>
                                       </tr>
                                       <tr>
                                          <td>タイトル</td>
                                          <td>'.$row['movie_title'].'</td>
                                       </tr>
                                       <tr>
                                          <td>画像</td>
                                          <td>'.$row['movie_img'].'</td>
                                       </tr>';
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
                    <button type="submit" class="btn btn-info btn-lg"><a href="#" style="color: #fff;">戻る</a></button>
                    <button type="submit" class="btn btn-danger btn-lg"><a href="sys_movie_delete.php?id=<?php echo $id; ?>" style="color: #fff;">削除</a></button>

                  </form>
                </div><!-- /.detail -->
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>
    </div>

</body>
</html>
