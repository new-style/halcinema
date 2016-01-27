<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | トップ</title>
    <!-- 定義 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <!-- 読み込み -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../css/style.css">
    <script ></script>

</head>
<body>

    <div class="container">
<?php
require_once("./parts/header.php");
?>

        <article class="row">
<?php
require_once("./parts/side.php");
?>
            <section class="col-md-10 top_nav">
                <ul>
                    <li><a href="http://127.0.0.1/halcinema/manager/View/Sales/search.php">売上管理</a></li>
                    <li><a href="http://127.0.0.1/halcinema/manager/View/Visitor/search.php">来客管理</a></li>
                    <li><a href="#">アクセス管理</a></li>
                    <li><a href="http://127.0.0.1/halcinema/manager/View/Customer/user_search.php">会員管理</a></li>
                    <li><a href="#">映画管理一覧</a></li>
                    <li><a href="#">メルマガ管理</a></li>
                    <li><a href="http://127.0.0.1/halcinema/manager/View/Manager/list.php">管理者管理</a></li>
                </ul>
            </section>
        </article>
<?php
require_once("./parts/footer.php");
?>
    </div>

</body>
</html>
