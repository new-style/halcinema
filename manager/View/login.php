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
            <section class="col-md-4 col-md-offset-4 login">
                <form action="index.php" method="post">
                    <filedset>
                        <legend class="text-center">LOGIN</legend>
                        <div class="form-group">
                            <label for="id">LOGIN ID</label>
                            <input type="text" id="id" class="form-control" placeholder="LOGIN ID">
                        </div>
                        <div class="form-group">
                            <label for="id">PASSWORD</label>
                            <input type="password" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                        <button type="button" class="btn btn-primary">login</button>
                    </filedset>
                </form>
            </section>
        </article>

<?php
require_once("./parts/footer.php");
?>
    </div>

</body>
</html>
