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
                <h1>映画情報登録</h1>

                <div class="detail">
                  <form class="" action="sys_create.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="movie_title" placeholder="映画タイトル"><br>
                    <input type="text" name="cast" placeholder="キャスト"><br>
                    <input type="text" name="kantoku" placeholder="監督"><br>
                    <input type="text" name="scenario" placeholder="シナリオ"><br>
                    <input type="text" name="staff" placeholder="スタッフ"><br>
                    <input type="text" name="restricted" placeholder="年齢制限"><br>
                    <input type="text" name="start_date" placeholder="公開開始日時"><br>
                    <input type="text" name="finish_date" placeholder="公開終了日時"><br>
                    <!-- <input type="text" name="movie_img" placeholder="画像指定"><br> -->
                    <input type="file" name="upload_file">
                    <input type="submit">

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
