<?php
	session_start();
  $dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
  $dbUser = "root";
  // windowsの人はrootではなく空("")にしてください。
  $dbPass = "root";


  //PDOによるDB接続
  $pdo = new PDO ($dsn, $dbUser, $dbPass);

  //PDOの動作設定
  //設定①エラーメッセージは黙殺しないで例外を吐かせる！
  //エラーモードをエクセプションモードにしなさい！
  $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //設定②SQLインジェクション対策
  $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $aaa = '';
	$day = $_POST['month'];

  try{
  	for($i = 1;$i<=31;$i++){
	  	$pay = 0;
  		$i = sprintf('%02d',$i);
	    $sql = "select * from hal_order where order_date = '2016-$day-$i'";
	    $stmh = $pdo -> prepare($sql);
	    $stmh -> execute();
	    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
	    	$pay += $row['payment'];
	    }
	    if($i == 31){
		    $aaa .= $pay;
	    }else{
		    $aaa .= $pay.",";
	    }
	  }
  }catch(PDOException $e){
    echo "エラーだぉ";
    echo "<br>【エラーメッセージ】<br>";
    echo $e -> getMessage();
    echo "<br >【エラーコード】<br>";
    echo $e -> getCode();
  }

  echo $aaa;


  // $sum = 0;
  // $priceArr = Array();
  // for( $date = 1; $date <= 30; $date++ ){
  //   $sql = "select * from hal_order";
  //   $stmh = $pdo -> prepare($sql);
  //   $stmh -> execute();
  //   $row = $stmh -> fetch(PDO::FETCH_ASSOC);
  //   $sum += $row['payment'];
  //   $priceArr[] = $row['payment'];
  //   $priceArr[] = $row['payment'];
  // }