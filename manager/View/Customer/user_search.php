<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 顧客管理 | 顧客設定</title>
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
                <h1>顧客管理</h1>

                <form action="./search.php" method="post" class="form-inline" role="form">
                    <fieldset class="col-md-12 search_form">
                        <legend>検索</legend>
                        <div class="form-group">
                          <label for="word">フリーワード</label>
                          <input type="text" name="free_word" id="word" class="form-control">
                        </div><!-- /.form-group -->
                        <button type="submit" class="btn btn-default">検索</button>
                    </fieldset>
                </form>

                <div class="search_list">
                    <table class="table table-striped table-bordered">
                        <caption>検索結果</caption>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>名前</th>
                                <th>アカウント変更</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><a href="#">
                                <td>1</td>
                                <td>abcde</td>
                                <td>あいうえお</td>
                                <td><a href="#" class="btn btn-warning btn-sm">変更</a></td>
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
