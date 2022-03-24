<?php
session_start();
$conn = mysqli_connect("localhost","root","","sim_khdtk");

//input database
//penataan kawasan
if(isset($_POST['input1'])){
    $inputdatapk = mysqli_query($conn, "INSERT INTO penataankawasan VALUES 
    ('".$_POST['idpk']."',
    '".$_POST['kodepk']."',
    '".$_POST['nomorsk']."',
    '".$_POST['tanggalberlaku']."',
    '".$_POST['kodertk']."')");

	if($inputdatapk){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}
//UMT
if(isset($_POST['input2'])){
    $inputdataumt = mysqli_query($conn, "INSERT INTO UMT VALUES 
    ('".$_POST['idumt']."',
    '".$_POST['kodepkumt']."',
    '".$_POST['kodeumt']."',
    '".$_POST['tipeumt']."',
    '".$_POST['umt']."',
    '".$_POST['tanggalberlakuumt']."')");

	if($inputdataumt){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}

//zonasi
if(isset($_POST['input3'])){
    $inputdatazonasi = mysqli_query($conn, "INSERT INTO zonasi VALUES 
    ('".$_POST['idumt']."',
    '".$_POST['kodepkzonasi']."',
    '".$_POST['kodezonasi']."',
    '".$_POST['zonasi']."',
    '".$_POST['skzonasi']."',
    '".$_POST['deskripsizonasi']."',
    '".$_POST['landusezonasi']."')");

	if($inputdataumt){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}

//LMU
if(isset($_POST['input4'])){
    $inputdatazonasi = mysqli_query($conn, "INSERT INTO lmu VALUES 
    ('".$_POST['idlmu']."',
    '".$_POST['kodepklmu']."',
    '".$_POST['kodelmu']."',
    '".$_POST['lmu']."',
    '".$_POST['sklmu']."',
    '".$_POST['deskripsilmu']."',
    '".$_POST['altitudelmu']."',
    '".$_POST['slopelmu']."',
    '".$_POST['tanahlmu']."',
    '".$_POST['pllmu']."')");

	if($inputdataumt){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}

//delete penataan kawasan
if(isset($_POST['hapuspk'])){;
    $deleteidpk = $_POST['idpk'];

    $deletedatapk = mysqli_query($conn, "delete from penataankawasan where id='$deleteidpk'");
               
	if($deletedatapk){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}
//delete umt
if(isset($_POST['hapusumt'])){;
  $deleteidumt = $_POST['idumt'];

  $deletedataumt = mysqli_query($conn, "delete from umt where id='$deleteidumt'");
             
if($deletedataumt){
      header('location:organisasi-kawasan.php');
      
  }
  else {
  header('location:organisasi-kawasan.php');
  }
}
//delete zonasi
if(isset($_POST['hapuszonasi'])){;
  $deleteidzonasi = $_POST['idzonasi'];

  $deletedatazonasi = mysqli_query($conn, "delete from zonasi where id='$deleteidzonasi'");
             
if($deletedatazonasi){
      header('location:organisasi-kawasan.php');
      
  }
  else {
  header('location:organisasi-kawasan.php');
  }
}
//delete lmu
if(isset($_POST['hapuslmu'])){;
  $deleteidlmu = $_POST['idlmu'];

  $deletedatalmu = mysqli_query($conn, "delete from lmu where id='$deleteidlmu'");
             
if($deletedatazonasi){
      header('location:organisasi-kawasan.php');
      
  }
  else {
  header('location:organisasi-kawasan.php');
  }
}
?>