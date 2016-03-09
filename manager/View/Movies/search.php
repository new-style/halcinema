<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 映画管理一覧</title>
    <!-- 定義 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <!-- 読み込み -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/style.css">
    <script ></script>

</head>
<body>

    <div class="container">
<?php
require_once("./../parts/header.php");
?>

        <article class="row">
<?php
require_once("./../parts/side.php");
?>
            <section class="col-md-10">
                <h1>映画管理</h1>

                <div class="search_list">
                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>画像</th>
                                <th>情報変更</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><a href="#">
                                <td width="50px">1</td>
                                <td width="70px">00001</td>
                                <td>オデッセイ</td>
                                <td width="250px"><img src="http://127.0.0.1/halcinema/img/mi05.jpg"></td>
                                <td width="200px"><a href="http://127.0.0.1/halcinema/manager/View/Movies/change.php" class="btn btn-warning btn-sm">変更</a></td>
                            </a></tr>
                        </tbody>
                    </table>
                </div><!-- /.search_list -->
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>
    </div>

</body>
</html>
