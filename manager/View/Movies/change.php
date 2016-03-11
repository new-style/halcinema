<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HALシネマ管理者 | 映画情報変更</title>
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
                <h1>映画情報変更</h1>

                <div class="detail">
                  <form class="" action="" method="post">
                    <table class="table table-bordered">
                        <tbody>
                              <tr>
                                <th>No</th>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th>ID</th>
                                <td>00001</td>
                              </tr>
                              <tr>
                                <th>タイトル</th>
                                <td><input type="text" value="オデッセイ" class="form-control"></td>
                              </tr>
                              <tr>
                                <th>画像</th>
                                <td><img src="http://127.0.0.1/halcinema/img/mi05.jpg"></td>
                              </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-info btn-lg">戻る</button>
                    <button type="submit" class="btn btn-warning btn-lg">変更</button>

                  </form>
                </div><!-- /.detail -->
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>
    </div>

</body>
</html>
