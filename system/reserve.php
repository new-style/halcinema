<?php
	session_start();
	$dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
	$dbUser = "root";
	// windowsの人はrootではなく空("")にしてください。
	$dbPass = "root";


	//PDOによるDB接続
	$pdo = new PDO ($dsn, $dbUser, $dbPass);

	//PDOの動作設定
	//設定①エラーメッセージは黙殺しないで例外を吐かせる！
	//エラーモードをエクセプションモードにしなさい！
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//設定②SQLインジェクション対策
	$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

	$price = Array(1800,1500,1000,500);

	//postデータ受け取り

	// exit();
  $ticketSum = $_SESSION['ippan'] + $_SESSION['daigaku'] + $_SESSION['syougaku'] + $_SESSION['child'];
	$a = $_SESSION['ticket'];

	//プレースホルダーを用いたセキュアなSQL
	//名前付きプレースホルダー
	$sql = "insert into hal_order values('null','$a','2','1','2016-03-01','2','$ticketSum')";
	// $sql = "insert into hal_order values('null','2','2','1','2016-03-01','2','1800')";

	//普通のやつ
	//$pdo -> query("insert into 0707_users values('s01','koichi')");


	//ステートメントハンドラの取得
	$stmt = $pdo -> prepare($sql);

	//プレースホルダーの設定


	//SQL実効
	$stmt -> execute();


	//DB切断
	$pdo = null;
header("Location: ../View/complete.php");
