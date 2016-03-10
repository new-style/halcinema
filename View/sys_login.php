<?php

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
$pdo->setAttribute(
  PDO::ATTR_EMULATE_PREPARES,false
);

//プレースホルダを用いたセキュアなSQL
$sql = "INSERT INTO hal_tanaka (user_name, user_id, password, name, kana_name, sex, birth, prefectures, street_address, tel, mail_address, magazin)
		VALUES($user_name,$user_id,$mail_address,password,$last_name.$first_name,$tel,$sex,$year.$month.$day , $pref_id)";

//ステートメントハンドラの取得
$stmt = $pdo->prepare($sql);

// SQL実行
$stmt->execute();

?>