<?php

$user_id = $_POST['user_id'];
$password = $_POST['password'];
$cookie = $_POST['cookie'];



//DB接続文字列
$dsn = "mysql:host=localhost;dbname=halcinema;charset=utf8";
$dbUser = "root";
$dbPass = "root";
//PDOによるDB接続
$pdo = new PDO( $dsn, $dbUser, $dbPass );

//PDOの動作設定
//1.エラー発生時は黙殺せんと、声を上げて！
$pdo->setAttribute(
  PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION
);

//2.SQLインジェクション対策
$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

//プレースホルダを用いたセキュアなSQL
$sql = "SELECT * FROM hal_tanaka";



//ステートメントハンドラの取得
$stmt = $pdo -> prepare($sql);

// SQL実行
$stmt -> execute();

while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
	if($row['user_id'] == $user_id && $row['password'] == $password ){
		session_start();
		$_SESSION["name"] = $row['name'];
		header("Location: ./Member/mypage.php");
		exit();
	}
	else{
		header("Location: login.php?error=1");
	}
}


?>