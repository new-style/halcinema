<?php
session_start();
    //����
    require_once( 'fpdf/mbfpdf.php' );

    //DB����f�[�^�󂯎��
    $year = 2016;
    $month = 3;
    $date = array(1,2,3,4,5,6,7,8,9,10);
    $date_num = array(
        10000,20000,10000,20000,20000,
        10000,20000,10000,20000,20000
    );
   
    //�����R�[�h�ϊ�
    //mb_convert_encoding($, 'SJIS-win', 'UTF-8')


    //PDF
    //�c����
    $pdf = new Mbfpdf("P");

    //�t�H���g�ǉ�
    $pdf -> addMbFont(KOZMIN,"SJIS");

    //�y�[�W�ǉ�
    $pdf -> addPage();


    //�o��
    //���t
    //�t�H���g�ݒ�
    $pdf -> setFont(KOZMIN,"",10);

    $pdf -> setXY(170,10);
    $pdf -> write(10,"2015/11/17");


    //�^�C�g��
    //�t�H���g�ݒ�
    $pdf -> setFont(KOZMIN,"",16);

    $pdf -> setXY(10,20);
    $pdf -> write(16,"����ꗗ");

    //����
    //�t�H���g�ݒ�
    $pdf -> setFont(KOZMIN,"",12);

    $pdf -> setXY(10,30);
    $pdf -> write(12,$year);
    $pdf -> write(12,"�@�N�@");
    $pdf -> write(12,$month);
    $pdf -> write(12,"�@��");

    //�\�`��


    //�^�C�g��
    //�F�̒ǉ�/�ݒ�
    $pdf -> setFillColor(100,100,100);
    //�����F�̐ݒ�
    $pdf -> setTextColor(255,255,255);
    //�t�H���g�ݒ�
    $pdf -> setFont(KOZMIN,"",12);
    //���W�̐ݒ�
    $pdf -> setXY(10,50);

    $pdf -> cell(40,10,"��",1,0,"C",1);
    $pdf -> cell(40,10,"��",1,0,"C",1);
    $pdf -> cell(110,10,"������",1,1,"C",1);

    //�f�[�^
    //�����F�̐ݒ�
    $sum = 0;
    $pdf -> setTextColor(0,0,0);
for($i = 1;$i<31;$i++){
    $a = $_SESSION['priceArr'][$i];
    $sum += $a;
    $pdf -> cell(40,10,"3",1,0,"C");
    $pdf -> cell(40,10,(string)$i,1,0,"C");
    $pdf -> cell(110,10,(string)$a,1,1,"R");
}

    //�����v
    $pdf -> cell(80,10,"���v",1,0,"C");
    $pdf -> cell(110,10,(string)$sum,1,1,"R");



    //�o��
    $pdf -> output();
?>
