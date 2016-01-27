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
                    <li><a href="#">会員管理</a></li>
                    <li><a href="#">映画管理一覧</a></li>
                    <li><a href="#">メルマガ管理</a></li>
                    <li><a href="#">管理者管理</a></li>
                </ul>
            </aside>

            <section class="col-md-10">
                <h1>売上管理</h1>
                <form action="./search.php" method="post" class="form-inline" role="form">
                    <fieldset class="col-md-12 search_form">
                        <legend>検索</legend>
                        <div class="form-group">
                            <select name="year" id="year" class="form-control">
                                <option>2015</option>
                            </select>
                            <label for="year">年</label>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <select name="month" id="month" class="form-control">
<?php
    for( $i = 1; $i <= 12; $i++ ){
?>
                                <option value=""><?php echo $i ?></option>
<?php
    }
?>
                            </select>
                            <label for="month">月</label>
                            <button type="submit" class="btn btn-default">検索</button>
                        </div><!-- /.form-group -->
                    </fieldset>
                </form>

                <div class="col-md-12 search_list">
                    <div class="pdf_put col-md-2 col-md-offset-10">
                      <a href="#" class="btn btn-warning">PDF出力</a>
                    </div>
                    <table class="table table-striped table-bordered">
                        <caption>2015　年　1　月</caption>
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th colspan="2">ネット予約</th>
                                <th colspan="2">店舗販売</th>
                                <th colspan="2">全体</th>
                            </tr>
                            <tr>
                                <th>日付</th>
                                <th>曜日</th>
                                <th>顧客数</th>
                                <th>売上</th>
                                <th>顧客数</th>
                                <th>売上</th>
                                <th>顧客数</th>
                                <th>売上</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
    for( $day = 1; $day <= 30; $day++ ){
?>
                            <tr>
                                <td><?php echo $day; ?></td>
                                <td>月</td>
                                <td>20</td>
                                <td>20000</td>
                                <td>10</td>
                                <td>10000</td>
                                <td>30</td>
                                <td>30000</td>
                            </tr>
<?php
    }
?>
                          <tr>
                            <td colspan="2">合計</td>
                            <td>10000</td>
                            <td>2000000</td>
                            <td>10000</td>
                            <td>1000000</td>
                            <td>300</td>
                            <td>300000000</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>

        <footer class="row bg-ns text-center">
            <p><small>Copyright &copy; 2015 NewStyle All Rights Reserved.</small></p>
        </footer>

    </div>

</body>
</html>
