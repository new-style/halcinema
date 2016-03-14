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
  $edit = $_POST['edit'];
  if(isset($_POST['old_pass'])){
    $old_pass = $_POST['old_pass'];
    $sql = "select * from hal_tanaka where id=".$id;
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $row = $stmh -> fetch(PDO::FETCH_ASSOC);
    if($old_pass != $row['password']){
      header('Location: user_edit.php?id='.$id.'&error=1');
      exit();
    }
  }
  echo $id;
  echo $name;
  echo $edit;
  try{
    $sql = "update hal_tanaka set ".$name." = '".$edit."' where id=".$id;
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
  }catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }