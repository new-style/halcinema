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
        <header class="row bg-ns">
            <h1><a href="#"><img src="./../../../img/logo.png" alt="HALシネマ"></a></h1>
        </header>

        <article class="row">
            <aside class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">○○　さん</li>
                    <li><a href="#">売上管理</a></li>
                    <li><a href="#">来客管理</a></li>
                    <li><a href="#">アクセス管理</a></li>
                    <li><a href="#">顧客管理</a></li>
                    <li><a href="#">映画管理一覧</a></li>
                    <li><a href="#">メルマガ管理</a></li>
                    <li><a href="#">管理者管理</a></li>
                </ul>
            </aside>

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

        <footer class="row bg-ns text-center">
            <p><small>Copyright &copy; 2015 NewStyle All Rights Reserved.</small></p>
        </footer>

    </div>

</body>
</html>
