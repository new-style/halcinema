<?php
  session_start();
  $dsn= "mysql:host=localhost;dbname=halcinema;charset=utf8";
  $dbUser = "root";
  // windowsの人はrootではなく空("")にしてください。
  $dbPass = "root";

  $pdo = new PDO ($dsn, $dbUser, $dbPass);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //設定②SQLインジェクション対策
  $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

  $movie_title = $_POST['movie_title'];
  $cast = $_POST['cast'];
  $kantoku = $_POST['kantoku'];
  $scenario = $_POST['scenario'];
  $staff = $_POST['staff'];
  $restricted = $_POST['restricted'];
  $start_date = $_POST['start_date'];
  $finish_date = $_POST['finish_date'];
  $tmp_name = $_FILES['upload_file']['tmp_name'];
  $movie_img = $_FILES['upload_file']['name'];
  move_uploaded_file($tmp_name,'../../img/'.$movie_img);

			$sql = "insert into hal_movie values('8','$movie_title','$cast','$kantoku','$scenario','$staff','$restricted','$start_date','$finish_date','$movie_img','')";
      $stmh = $pdo -> prepare($sql);
      $stmh -> execute();
      header("Location: ../comp/create_comp.php");
 