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
  try{
    $sql = "select * from hal_movie where movie_id=".$id."";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
  }catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }
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
                <h1>映画情報変更</h1>

                <div class="detail">
                    <table class="table table-bordered">
                        <tbody>
                        <?php
                          try{
                            $sql = "select * from hal_movie where movie_id=".$id."";
                            $stmh = $pdo -> prepare($sql);
                            $stmh -> execute();
                            while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
                              echo '<tr>
                                      <th>タイトル</th>
                                      <td>
                                        <form action="sys_movie_edit.php?id='.$id.'&name=movie_title" method="POST">
                                        <input type="text" name="movie_edit" value="'.$row['movie_title'].'">
                                      </td>
                                      <td width="100px"><button type="submit" class="btn btn-warning btn-lg">変更</button></form></td>
                                    </tr>
                                    <tr>
                                      <th>キャスト</th>
                                      <td>
                                        <form action="sys_movie_edit.php?id='.$id.'&name=cast" method="POST">
                                        <input type="text" name="movie_edit" value="'.$row['cast'].'">
                                      </td>
                                      <td><button type="submit" class="btn btn-warning btn-lg">変更</button></form></td>
                                    </tr>
                                    <tr>
                                      <th>監督</th>
                                      <td>
                                        <form action="sys_movie_edit.php?id='.$id.'&name=kantoku" method="POST">
                                        <input type="text" name="movie_edit" value="'.$row['kantoku'].'">
                                      </td>
                                      <td><button type="submit" class="btn btn-warning btn-lg">変更</button></form></td>
                                    </tr>
                                    <tr>
                                      <th>スタッフ</th>
                                      <td>
                                        <form action="sys_movie_edit.php?id='.$id.'&name=staff" method="POST">
                                        <input type="text" name="movie_edit" value="'.$row['staff'].'">
                                      </td>
                                      <td><button type="submit" class="btn btn-warning btn-lg">変更</button></form></td>
                                    </tr>
                                    <tr>
                                      <th>画像</th>
                                      <td>
                                        <img src="../../img/'.$row['movie_img'].'">
                                        <form action="sys_movie_edit.php?id='.$id.'&name=movie_img" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="upload_file">
                                      </td>
                                      <td><button type="submit" class="btn btn-warning btn-lg">変更</button></form></td>
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

                </div><!-- /.detail -->
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>
    </div>

</body>
</html>
