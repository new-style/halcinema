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
  if(isset($_FILES['upload_file'])){
	  $file = $_FILES['upload_file'];
	  $tmp_name = $file['tmp_name'];
		$edit = $file['name'];
		echo $edit;
		echo $tmp_name;
		move_uploaded_file($tmp_name,'../../img/'.$edit);
  }else{
  	
	  $edit = $_POST['movie_edit'];
	  echo $edit;
  }
  try{
    $sql = "update hal_movie set ".$name." = '".$edit."' where movie_id=".$id;
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
  }catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }