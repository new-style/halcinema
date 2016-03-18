<?php
session_start();

$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$mail_address = $_POST['mail_address'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];
$tel = $_POST['tel'];
$sex = $_POST['sex'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$pref_id = $_POST['pref_id'];

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$last_name_kana = $_POST['last_name_kana'];
$first_name_kana = $_POST['first_name_kana'];

$mailmagazine = $_POST['mailmagazine'];

$name = $last_name.$first_name;
$name_kana = $last_name_kana.$first_name_kana;

$birth = $year.$month.$day;



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
$sql = "INSERT INTO hal_tanaka VALUES('$user_id', '$user_name', '$password', '$name', '$name_kana', '$sex', '$birth', '$pref_id','null', '$tel', '$mail_address', '$mailmagazine', 'null', 'null')";

//ステートメントハンドラの取得
$stmt = $pdo -> prepare($sql);

// SQL実行
$stmt -> execute();

header("Location: complete.php");

?>