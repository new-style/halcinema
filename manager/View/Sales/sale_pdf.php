<?php
    //����
    require_once( 'fpdf/mbfpdf.php' );


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
    $pdf -> write(12,"2016 ");
    $pdf -> write(12,"�N�@");
    $pdf -> write(12,"3");
    $pdf -> write(12,"��");

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

    $pdf -> cell(40,10,"���t",1,0,"C",1);
    $pdf -> cell(40,10,"�j��",1,0,"C",1);
    $pdf -> cell(110,10,"������",1,1,"C",1);

    //�f�[�^
    //�����F�̐ݒ�
    $pdf -> setTextColor(0,0,0);

    $pdf -> cell(40,10,"1",1,0,"C");
    $pdf -> cell(40,10,"��",1,0,"C");
    $pdf -> cell(110,10,"100000",1,1,"R");

    //�����v
    $pdf -> cell(80,10,"���v",1,0,"C");
    $pdf -> cell(110,10,"100000",1,1,"R");


    ob_end_clean();

    //�o��
    $pdf -> output('');
?>
