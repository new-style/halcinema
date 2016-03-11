<?php
    //処理
    require_once( 'fpdf/mbfpdf.php' );


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
    $pdf -> write(12,"2016 ");
    $pdf -> write(12,"年　");
    $pdf -> write(12,"3");
    $pdf -> write(12,"月");

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

    $pdf -> cell(40,10,"日付",1,0,"C",1);
    $pdf -> cell(40,10,"曜日",1,0,"C",1);
    $pdf -> cell(110,10,"総売上",1,1,"C",1);

    //データ
    //文字色の設定
    $pdf -> setTextColor(0,0,0);

    $pdf -> cell(40,10,"1",1,0,"C");
    $pdf -> cell(40,10,"月",1,0,"C");
    $pdf -> cell(110,10,"100000",1,1,"R");

    //総合計
    $pdf -> cell(80,10,"合計",1,0,"C");
    $pdf -> cell(110,10,"100000",1,1,"R");


    ob_end_clean();

    //出力
    $pdf -> output('');
?>
