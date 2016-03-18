<?php
session_start();
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
    <script src="../../js/jquery-1.11.0.min.js"></script>
    <script>
        $(function(){
            $('select#month').change(function(){
                var month = $(this).val();
                $('.salesTable').empty();
                $.ajax({
                    type: "POST",
                    url: "sys_sales.php",
                    data: {month: month},
                    success: view,
                    error: er
                });
            });
            function view(data){
                alert(data);
                data = data.split(',');
                for(var i = 0;i<data.length;i++){
                    $('.salesTable').append('<tr><td>'+(i+1)+'</td><td>月</td><td>'+data[i]+'</td></tr>');
                }
            }
            function er(){

            }
        });
    </script>

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
                <h1>売上管理</h1>
                <form action="./search.php" method="post" class="form-inline" role="form">
                    <fieldset class="col-md-12 search_form">
                        <legend>検索</legend>
                        <div class="form-group">
                            <select name="year" id="year" class="form-control">
<?php
    for( $i = 2016;$i <=2016 ;$i++){
?>
                                <option><?php echo $i; ?></option>
<?php
}
?>
                            </select>
                            <label for="year">年</label>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <select name="month" id="month" class="form-control">
<?php
    for( $i = 1; $i <= 12; $i++ ){
?>
                                <option value="<?php echo sprintf('%02d',$i); ?>"><?php echo $i ?></option>
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
                      <a href="http://127.0.0.1/halcinema/manager/View/Sales/sale_pdf.php" class="btn btn-warning">PDF出力</a>
                    </div>
                    <table class="table table-striped table-bordered">
                        <caption>2015　年　1　月</caption>
                        <thead>
                            <tr>
                                <th>日付</th>
                                <th>曜日</th>
                                <th>総売上</th>
                            </tr>
                        </thead>
                        <tbody class="salesTable">
<!-- 
                            <tr>
                                <td>3</td>
                                <td>月</td>
                                <td>
                                  000
                                </td>
                            </tr>
                          <tr>
                            <td colspan="2">合計</td>
                            <td>0</td>
                          </tr> -->
                        </tbody>
                    </table>
                </div>
            </section>
        </article>

<?php
require_once("./../parts/footer.php");
?>

    </div>

</body>
</html>
