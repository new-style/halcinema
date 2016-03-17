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
try{
    $sql = "select * from hal_order";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();

}
catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br   >【エラーコード】<br>";
    echo $e -> getCode();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 売上管理</title>
    <!-- 定義 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <!-- 読み込み -->
    <link rel="stylesheet" href="./../../css/font-awesome.min.css">
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/style.css">
    <style>
        section{
            min-height: 600px !important; 
        }
        h1{
            margin-top: 250px;
            text-align: center;
        }
        p{
            text-align: center;
        }
    </style>

</head>
<body>

    <div class="container">
<?php
require_once("./../parts/header.php");
?>

        <article class="row">
            <section class="col-md-12">
                <h1>更新が完了しました。</h1>
            </section>
            <p><a href="http://127.0.0.1/halcinema/manager/View/index.php">トップに戻る</a></p>
        </article>

<?php
require_once("./../parts/footer.php");
?>

    </div>

</body>
</html>
