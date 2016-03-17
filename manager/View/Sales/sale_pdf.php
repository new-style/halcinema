<?php
session_start();
    //処理
    require_once( 'fpdf/mbfpdf.php' );

    //DBからデータ受け取り
    $year = 2016;
    $month = 3;
    $date = array(1,2,3,4,5,6,7,8,9,10);
    $date_num = array(
        10000,20000,10000,20000,20000,
        10000,20000,10000,20000,20000
    );
   
    //文字コード変換
    //mb_convert_encoding($, 'SJIS-win', 'UTF-8')


    //PDF
    //縦向き
    $pdf = new Mbfpdf("P");

    //フォント追加
    $pdf -> addMbFont(KOZMIN,"SJIS");

    //ページ追加
    $pdf -> addPage();


    //出力
    //日付
    //フォント設定
    $pdf -> setFont(KOZMIN,"",10);

    $pdf -> setXY(170,10);
    $pdf -> write(10,"2015/11/17");


    //タイトル
    //フォント設定
    $pdf -> setFont(KOZMIN,"",16);

    $pdf -> setXY(10,20);
    $pdf -> write(16,"売上一覧");

    //期間
    //フォント設定
    $pdf -> setFont(KOZMIN,"",12);

    $pdf -> setXY(10,30);
    $pdf -> write(12,$year);
    $pdf -> write(12,"　年　");
    $pdf -> write(12,$month);
    $pdf -> write(12,"　月");

    //表描画


    //タイトル
    //色の追加/設定
    $pdf -> setFillColor(100,100,100);
    //文字色の設定
    $pdf -> setTextColor(255,255,255);
    //フォント設定
    $pdf -> setFont(KOZMIN,"",12);
    //座標の設定
    $pdf -> setXY(10,50);

    $pdf -> cell(40,10,"月",1,0,"C",1);
    $pdf -> cell(40,10,"日",1,0,"C",1);
    $pdf -> cell(110,10,"総売上",1,1,"C",1);

    //データ
    //文字色の設定
    $sum = 0;
    $pdf -> setTextColor(0,0,0);
for($i = 1;$i<31;$i++){
    $a = $_SESSION['priceArr'][$i];
    $sum += $a;
    $pdf -> cell(40,10,"3",1,0,"C");
    $pdf -> cell(40,10,(string)$i,1,0,"C");
    $pdf -> cell(110,10,(string)$a,1,1,"R");
}

    //総合計
    $pdf -> cell(80,10,"合計",1,0,"C");
    $pdf -> cell(110,10,(string)$sum,1,1,"R");



    //出力
    $pdf -> output();
?>
