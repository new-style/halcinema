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

  $user_id = "";
	if( isset( $_POST["user_id"] ) ){
	$user_id = $_POST['user_id'];
  }

  $mail_address = "";
	if( isset( $_POST["mail_address"] ) ){
	$mail_address = $_POST['mail_address'];
  }

  $password = "";
	if( isset( $_POST["password"] ) ){
	$password = $_POST['password'];
  }

  $newPassword = "";
	if( isset( $_POST["newPassword"] ) ){
	$newPassword = $_POST['newPassword'];
  }

  $NnewPassword = "";
	if( isset( $_POST["NnewPassword"] ) ){
	$NnewPassword = $_POST['NnewPassword'];
  }

  $name = "";
	if( isset( $_POST["name"] ) ){
	$name = $_POST['name'];
  }

  $nameKana = "";
	if( isset( $_POST["nameKana"] ) ){
	$nameKana = $_POST['nameKana'];
  }

  $tel = "";
	if( isset( $_POST["tel"] ) ){
	$tel = $_POST['tel'];
  }

  $Prefectures = "";
	if( isset( $_POST["Prefectures"] ) ){
	$Prefectures = $_POST['Prefectures'];
  }


  echo $user_id;
  echo $mail_address;
  echo $password;
  echo $newPassword;
  echo $NnewPassword;
  echo $name;
  echo $nameKana;
  echo $tel;
  echo $Prefectures;



?>