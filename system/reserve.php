<?php 
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
	$ippan = $_POST['human_General'];
	$daigaku = $_POST['human_Large'];
	$syougaku = $_POST['human_Little'];
	$child = $_POST['human_min'];
	// 配列で受け取れる
	$a = $_POST['sheetNo'];

	print_r ($a);
	echo $child * $price[3];
	// exit();



	//プレースホルダーを用いたセキュアなSQL
	//名前付きプレースホルダー
	$sql = "insert into reserve values(:id,:name)";

	//普通のやつ
	//$pdo -> query("insert into 0707_users values('s01','koichi')");


	//ステートメントハンドラの取得
	$stmt = $pdo -> prepare($sql);

	//プレースホルダーの設定
	$stmt -> bindValue(':id',$id);
	$stmt -> bindValue(':name',$name);

	//SQL実効
	$stmt -> execute();


	//DB切断
	$pdo = null;