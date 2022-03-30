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
		header('organisasi-kawasan.php');
        
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

	if($inputdatazonasi){
        header('location:organisasi-kawasan.php');
        
    }
    else {
		header('location:organisasi-kawasan.php');
    }
}

//LMU
if(isset($_POST['input4'])){
    $inputdatalmu = mysqli_query($conn, "INSERT INTO lmu VALUES 
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

	if($inputdatalmu){
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

//////////////////////////////////////////
//anakpetak
if(isset($_POST['inputanakpetak'])){
  $inputdataanakpetak = mysqli_query($conn, "INSERT INTO umt_anakpetak VALUES 
  ('".$_POST['idanakpetak']."',
  '".$_POST['kodeanakpetak2']."',
  '".$_POST['anakpetak']."',
  '".$_POST['kodeumt']."')");

if($inputdataanakpetak){
      header('location:struktur-umt.php');
      
  }
  else {
  header('location:struktur-umt.php');
  }
}
//cucupetak
if(isset($_POST['inputcucupetak'])){
  $inputdatacucupetak = mysqli_query($conn, "INSERT INTO umt_cucupetak VALUES 
  ('".$_POST['idcucupetak']."',
  '".$_POST['kodeanakpetakcupet']."',
  '".$_POST['kodecucupetak']."',
  '".$_POST['kodezonasilmucupet']."',
  '".$_POST['luas']."',
  '".$_POST['koorx']."',
  '".$_POST['koory']."')");

if($inputdatacucupetak){
      header('location:struktur-umt.php');
      
  }
  else {
  header('location:struktur-umt.php');
  }
}
//delete anak petak
if(isset($_POST['hapusanakpetak'])){;
  $deleteidanakpetak = $_POST['idanakpetak'];

  $deletedataanakpetak = mysqli_query($conn, "delete from umt_anakpetak where id='$deleteidanakpetak'");
             
if($deletedataanakpetak){
  header('location:struktur-umt.php');
      
  }
  else {
    header('location:struktur-umt.php');
  }
}
//delete cucupetak
if(isset($_POST['hapuscucupetak'])){;
  $deleteidcucupetak = $_POST['idcucupetak'];

  $deletedatacucupetak = mysqli_query($conn, "delete from umt_cucupetak where id='$deleteidcucupetak'");
             
if($deletedatacucupetak){
  header('location:struktur-umt.php');
      
  }
  else {
    header('location:struktur-umt.php');
  }
}
////////////////////////////////////
//input data cupet tanam
if(isset($_POST['inputcupet_tanam'])){
  $inputdatacupet_tanam = mysqli_query($conn, "INSERT INTO umt_cupet_tnm VALUES 
  ('".$_POST['idcupet_tanam']."',
  '".$_POST['kodecupet_tanam']."',
  '".$_POST['kodecupet']."',
  '".$_POST['tanggaltanam']."',
  '".$_POST['namailmiah']."',
  '".$_POST['namalokal']."',
  '".$_POST['jaraktanamx']."',
  '".$_POST['jaraktanamy']."')");

if($inputdatacupet_tanam){
      header('location:tanaman-umt.php');
      
  }
  else {
  header('location:tanaman-umt.php');
  }
}
//delete ccupet tanam
if(isset($_POST['hapuscupet_tanam'])){;
  $deleteidcupet_tanam = $_POST['idcupet_tanam'];

  $deletedatacupet_tanam = mysqli_query($conn, "delete from umt_cupet_tnm where id='$deleteidcupet_tanam'");
             
  if($deletedatacupet_tanam){
    header('location:tanaman-umt.php');
    
    }
    else {
    header('location:tanaman-umt.php');
    }
}
////////////////////////////////////
//input data inven
if(isset($_POST['inputinven'])){
  $inputdatainven = mysqli_query($conn, "INSERT INTO inventarisasi VALUES 
  ('".$_POST['idinven']."',
  '".$_POST['kodeinven']."',
  '".$_POST['nomorskinven']."',
  '".$_POST['tanggalberlakuinven']."',
  '".$_POST['tanggalselesaiinven']."',
  '".$_POST['pjinven']."',
  '".$_POST['metodeinven']."',
  '".$_POST['isinven']."',
  '".$_POST['bentukpuinven']."',
  '".$_POST['luaspuinven']."',
  '".$_POST['kodertkinven']."',
  '".$_POST['deskripsiinven']."')");

if($inputdatainven){
      header('location:inven-sdh.php');
      
  }
  else {
  header('location:inven-sdh.php');
  }
}
//delete inven
if(isset($_POST['hapusinven'])){;
  $deleteidinven = $_POST['idinven'];

  $deletedatainven = mysqli_query($conn, "delete from inventarisasi where id='$deleteidinven'");
             
  if($deletedatainven){
    header('location:inven-sdh.php');
    
  }
  else {
  header('location:inven-sdh.php');
  }
}
//input data inven umt
if(isset($_POST['inputinvenumt'])){
  $inputdatainvenumt = mysqli_query($conn, "INSERT INTO inventarisasi_umt VALUES 
  ('".$_POST['idinvenumt']."',
  '".$_POST['kodeinvenum']."',
  '".$_POST['kodeinven2']."',
  '".$_POST['kodecupetumt']."',
  '".$_POST['tanggalinvenumt']."',
  '".$_POST['pjinvenumt']."')");

if($inputdatainvenumt){
      header('location:inven-sdh.php');
      
  }
  else {
  header('location:inven-sdh.php');
  }
}
//delete inven umt
if(isset($_POST['hapusinvenumt'])){;
  $deleteidinvenumt = $_POST['idinvenumt'];

  $deletedatainvenumt = mysqli_query($conn, "delete from inventarisasi where id='$deleteidinvenumt'");
             
  if($deletedatainvenumt){
    header('location:inven-sdh.php');
    
  }
  else {
  header('location:inven-sdh.php');
  }
}
//input data inven pu
if(isset($_POST['inputinvenpu'])){
  $inputdatainvenpu = mysqli_query($conn, "INSERT INTO inventarisasi_pu VALUES 
  ('".$_POST['idinvenpu']."',
  '".$_POST['kodeinvenumpu']."',
  '".$_POST['kodeinvenpu']."',
  '".$_POST['nomorpu']."',
  '".$_POST['tanggalinvenpu']."',
  '".$_POST['pjinvenpu']."',
  '".$_POST['luasinvenpu']."',
  '".$_POST['bentukinvenpu']."',
  '".$_POST['koorxinvenpu']."',
  '".$_POST['kooryinvenpu']."',
  '".$_POST['ndvi']."',
  '".$_POST['msavi']."',
  '".$_POST['c']."',
  '".$_POST['d']."',
  '".$_POST['n']."',
  '".$_POST['jenistanah']."',
  '".$_POST['kelerengan']."',
  '".$_POST['altitude']."'
  )");

if($inputdatainvenpu){
      header('location:inven-sdh.php');
      
  }
  else {
  header('location:inven-sdh.php');
  }
}
//delete inven umt
if(isset($_POST['hapusinvenpu'])){;
  $deleteidinvenpu = $_POST['idinvenpu'];

  $deletedatainvenpu = mysqli_query($conn, "delete from inventarisasi where id='$deleteidinvenpu'");
             
  if($deletedatainvenpu){
    header('location:inven-sdh.php');
    
  }
  else {
  header('location:inven-sdh.php');
  }
}

?>