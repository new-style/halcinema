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
  $name = $_GET['name'];
  if(isset($_POST["user_edit"])){
    $user_edit = $_POST["user_edit"];
  }
  if(isset($_POST["oldPassword"])){
    $old_pass = $_POST["oldPassword"];
    $user_edit = $_POST["newPassword"];
    $sql = "select * from hal_tanaka where id=".$id;
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
    echo $row['password'];
    echo "<br>";
    echo $old_pass;
    echo "<br>";
    if($row['password'] == $old_pass){
      $sql = "update hal_tanaka set ".$name." = '".$user_edit."' where id=".$id;
      $stmh = $pdo -> prepare($sql);
      $stmh -> execute();
    }else{
      header("Location: setting.php");
      exit();
    }
  }

  echo $user_edit;

  try{
    $sql = "update hal_tanaka set ".$name." = '".$user_edit."' where id=".$id;
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
  }catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }

?>