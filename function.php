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
    ('".$_POST['kodepkumt']."',
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
    ('".$_POST['kodepkzonasi']."',
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
    ('".$_POST['kodepklmu']."',
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

//UPDATE
//update penataan kawasan
if(isset($_POST['updatepk'])){;
    $editidpk = $_GET['editidpk'];
    $editkodepk = $_POST['editkodepk'];
    $editnosk = $_POST['editnomorsk'];
    $edittanggalpk = $_POST['edittanggalberlaku'];
    $editrtkpk = $_POST['editkodertk'];

    $updatedatapk = mysqli_query($conn, "update penataankawasan set Kode Penataan Kawasan='$editkodepk',
    No SK='$editnosk', Berlaku Sejak='$edittanggalpk', Kode Rencana Tahunan Kegiatan='$editrtkpk' where id='$editidpk'");
               
	if($updatedatapk){
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

?>