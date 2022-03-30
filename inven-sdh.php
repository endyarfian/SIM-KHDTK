<?php
include 'function.php';
include 'auth_check.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Potensi Sumberdaya Hutan - Sistem Informasi Manejemen KHDTK UGM </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
<!--  -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/structure.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements/breadcrumb.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements/search.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

      <!--  BEGIN NAVBAR  -->
      <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-item flex-row ml-auto">

                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Cari...">
                        </div>
                    </form>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <
                        <div class="dropdown-item">
                            <a href="user_profile.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_logout.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.php">
                            <img src="assets/img/UGM90PX.png" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.php" class="nav-link "><img src="assets/img/130x45.png" class="navbar-logo"></a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <!--  begin dashboard  -->
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="index.php"> Analisis </a>
                            </li>
                            <li>
                                <a href="laporan.php"> Laporan</a>
                            </li>
                        </ul>
                    </li>
                    <!--  end dashboard  -->

                    <!--  BEGIN apps  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>APPS</span></div>
                    </li>

                    <li class="menu">
                        <a href="apps_maps.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                            <span>Web GIS</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="apps_notes.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Catatan</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="apps_calendar.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Kalender</span>
                            </div>
                        </a>
                    </li>
                    <!--  end apps  -->

                    <!--  BEGIN penataan kawasan  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>DATA INPUT</span></div>
                    </li>

                    <li class="menu">
                        <a href="#penataan" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Penataan Kawasan</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="penataan" data-parent="#accordionExample">
                            <li>
                                <a href="organisasi-kawasan.php"> Pengorganisasian Kawasan </a>
                            </li>
                            <li>
                                <a href="struktur-umt.php"> Struktur Kawasan UMT  </a>
                            </li>
                            <li>
                                <a href="tanaman-umt.php"> Jenis Tanaman pada UMT </a>
                            </li>                            
                        </ul>
                    </li>
                    <!--  end penataan kawasan  -->

                    <!--  BEGIN potensi sdh  -->
                    <li class="menu active">
                        <a href="#potensi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Potensi SDH</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="potensi" data-parent="#accordionExample">
                            <li  class="active">
                                <a href="inven-sdh.php"> Inventarisasi SDH </a>
                            </li>
                            <li>
                                <a href="ukur-pu.php"> Pengukuran dalam PU </a>
                            </li>
                        </ul>
                    </li>
                    <!--  end potensi sdh  -->

                    <!--  begin potensi sosekbud  -->
                    <li class="menu">
                        <a href="#sosekbud" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Potensi SOSEKBUD</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sosekbud" data-parent="#accordionExample">
                            <li>
                                <a href="sosekbud-desa.php"> SOSEKBUD Desa </a>
                            </li>
                            <li>
                                <a href="hwd.php"> Kelola Kawasan HWD </a>
                            </li>
                        </ul>
                    </li>
                    <!--  end potensi sosekbud  -->

                    <!--  begin rencana realisasi  -->
                    <li class="menu">
                        <a href="rencanarealisasi.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Rencana & Realisasi</span>
                            </div>
                        </a>
                    </li>

                    <!--  end rencana realisasi  -->

                    <!--  begin profil  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>AKUN</span>
                    </div>
                    </li>

                    <li class="menu">
                        <a href="#" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                             <span>Profil</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>                                
                            <span>Pengaturan</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="auth_logout.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                             <span>Logout</span>
                            </div>
                        </a>
                    </li>
                    <!--  end profil  -->
                    
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row" id="cancel-row">
                    <!-- begin tabel inven sdh -->
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="page-header">
                            
                                <div class="page-title breadcrumb-four">
                                <ul class="breadcrumb">
                                        <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
                                        </li>
                                        <li><a href="javscript:void(0);">
                                        Potensi Sumberdaya Hutan</a></li>
                                        <li  class="active"><a href="javscript:void(0);">
                                        Inventarisasi Sumberdaya Hutan</a></li>
                                    </ul>
                                    <br>
                                    <br>
                                <h3><b>DATA INVENTARISASI</b></h3>  
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <table id="zero-config" class="table table-striped" style="width:100%">
                                    <div class="col-lg-6 layout-top-spacing">
                                    <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#inven" >
                                        Input Data
                                    </button> 
                                    </div>
                                <thead>
                                <tr>
                                    <th>Kode Inventarisasi</th>
                                    <th>Nomor SK</th>
                                    <th>Tanggal Berlaku</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Metode</th>
                                    <th><i>Index Sampling</i></th>
                                    <th>Bentuk PU</th>
                                    <th>Luas PU</th>
                                    <th>Kode Rencana Kegiatan Tahunan</th>
                                    <th>Deskripsi</th>
                                    <th class="no-content">Hapus Data</th>
                                </tr>
                                </thead>
                                <tbody>                            
                                <?php
                                //data tabel inven
                                $tabelinven = mysqli_query($conn, "SELECT * FROM inventarisasi");
                                while ($datainven = mysqli_fetch_array($tabelinven)){
                                    $idinven = $datainven ['id'];
                                    $kodeinven = $datainven ['Kode Inventarisasi'];
                                    $skinven = $datainven ['No SK'];
                                    $tanggalskinven = $datainven ['Tanggal Berlaku'];
                                    $selesaiinven = $datainven ['Tanggal Selesai'];
                                    $pjinven = $datainven ['Penanggung Jawab'];
                                    $metodeinven = $datainven ['Metode'];
                                    $isinven = $datainven ['Indeks Sampling'];
                                    $bentukpuinven = $datainven ['Bentuk PU'];
                                    $luaspuinven = $datainven ['Luas PU'];
                                    $kodertkinven = $datainven ['Kode Rencana Tahunan Kegiatan'];
                                    $deskripsiinven = $datainven ['Deskripsi'];
                                ?>
                                <tr>
                                    <td><?=$kodeinven;?></td>
                                    <td><?=$skinven;?></td>
                                    <td><?=$tanggalskinven;?></td>
                                    <td><?=$selesaiinven;?></td>
                                    <td><?=$pjinven;?></td>
                                    <td><?=$metodeinven;?></td>
                                    <td><?=$isinven;?></td>
                                    <td><?=$bentukpuinven;?></td>
                                    <td><?=$luaspuinven;?></td>
                                    <td><?=$kodertkinven;?></td>
                                    <td><?=$deskripsiinven;?></td>
                                    <td>
                                        <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapusinven<?=$idinven;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        </button>
                                        </td>
                                </tr>
                                        <!-- Modal delete Inventarisasi-->
                                        <div class="modal fade" id="hapusinven<?=$idinven;?>" tabindex="-1" role="dialog" aria-labelledby="hapusinvenlabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusinvenlabel">Hapus Data Inventarisasi Sumberdaya Hutan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert-light-primary border-0 mb-4">
                                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                        </div>
                                                    <form class="form-vertical" method="post">
                                                        <li class="list-group-item">Kode Inventarisasi = <?=$kodeinven;?></li>
                                                        <li class="list-group-item">Nomor SK = <?=$skinven;?></li>
                                                        <li class="list-group-item">Tanggal Berlaku = <?=$tanggalskinven;?></li>
                                                        <li class="list-group-item">Tanggal Selesai = <?=$selesaiinven;?></li>
                                                        <li class="list-group-item">Penanggung Jawab = <?=$pjinven;?></li>
                                                        <li class="list-group-item">Metode = <?=$metodeinven;?></li>
                                                        <li class="list-group-item">Indeks Sampling = <?=$isinven;?></li>
                                                        <li class="list-group-item">Bentuk Petak Ukur = <?=$bentukpuinven;?></li>
                                                        <li class="list-group-item">Luas Petak Ukur = <?=$luaspuinven;?></li>
                                                        <li class="list-group-item">Acuan Kode Kegiatan Tahunan = <?=$kodertkinven;?></li>
                                                        <li class="list-group-item">Deskripsi = <?=$deskripsiinven;?></li>
                                                        <div class="form-group mb-4">
                                                            <input type="hidden" value = "<?=$idinven;?>" name="idinven" > 
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                            <button type="submit" name="hapusinven" class="btn btn-danger">Hapus</button>
                                                            </div>     
                                                    </form>         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal delete Inventarisasi -->
                                     <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end tabel inventarisasi -->
                <!-- begin tabel inven umt -->
                <div class="row" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="page-header">
                            <div class="page-title">
                                <h3><b>DATA POPULASI TANAMAN PADA UNIT MANAJEMEN TERKECIL</b></h3>  
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <table id="zero-config1" class="table table-striped" style="width:100%">
                                    <div class="col-lg-6 layout-top-spacing">
                                    <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#invenumt" >
                                        Input Data
                                    </button> 
                                    </div>
                                <thead>
                                <tr>
                                    <th>Kode Inven UM</th>
                                    <th>Kode Inventarisasi</th>
                                    <th>Kode Tanaman Cucu Petak</th>
                                    <th>Tanggal</th>
                                    <th>Penanggung Jawab</th>
                                    <th class="no-content">Hapus Data</th>
                                </tr>
                                </thead>
                                <tbody>                            
                                <?php
                                //data tabel inven umt
                                $tabelinvenumt = mysqli_query($conn, "SELECT * FROM inventarisasi_umt");
                                while ($datainvenumt = mysqli_fetch_array($tabelinvenumt)){
                                    $idinvenumt = $datainvenumt ['id'];
                                    $kodeinvenumt = $datainvenumt ['Kode Inven UM'];
                                    $kodeinven2 = $datainvenumt ['Kode Inven'];
                                    $kodecupetumt = $datainvenumt ['Kode Cucu Petak Tanam'];
                                    $tanggalinvenumt = $datainvenumt ['Tanggal'];
                                    $pjinvenumt = $datainvenumt ['Penanggung Jawab'];
                                ?>
                                <tr>
                                    <td><?=$kodeinvenumt;?></td>
                                    <td><?=$kodeinven2;?></td>
                                    <td><?=$kodecupetumt;?></td>
                                    <td><?=$tanggalinvenumt;?></td>
                                    <td><?=$pjinvenumt;?></td>
                                    <td>
                                        <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapusinvenumt<?=$idinvenumt;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        </button>
                                    </td>
                                </tr>
                                        <!-- Modal delete tabel inven umt-->
                                        <div class="modal fade" id="hapusinvenumt<?=$idinvenumt;?>" tabindex="-1" role="dialog" aria-labelledby="hapusinvenumtlabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusinvenumtlabel">Hapus Data Inventarisasi UMT</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert-light-primary border-0 mb-4">
                                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                        </div>
                                                    <form class="form-vertical" method="post">
                                                        <li class="list-group-item">Kode Inven UM =<?= $datainvenumt ['Kode Inven UM'];?></li>
                                                        <li class="list-group-item">Kode Inventarisasi =<?=$kodeinven2;?></li>
                                                        <li class="list-group-item">Kode Tanaman Cucu Petak =<?=$kodecupetumt;?></li>
                                                        <li class="list-group-item">Tanggal =<?=$tanggalinvenumt;?></li>
                                                        <li class="list-group-item">Penanggung Jawab =<?=$pjinvenumt;?></li>
                                                        <div class="form-group mb-4">
                                                        <input type="hidden" value = "<?=$idinvenumt;?>" name="idinvenumt" > 
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                            <button type="submit" name="hapusinvenumt" class="btn btn-danger">Hapus</button>
                                                            </div>     
                                                    </form>         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal delete tabel inven umt -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end tabel inven umt -->
                <!-- begin inven pu -->
                <div class="row" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="page-header">
                            <div class="page-title">
                                <h3><b>DATA PETAK UKUR & KONDISI TAPAK</b></h3>  
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <table id="zero-config2" class="table table-striped" style="width:100%">
                                    <div class="col-lg-6 layout-top-spacing">
                                    <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#invenpu" >
                                        Input Data
                                    </button> 
                                    </div>
                                <thead>
                                <tr>
                                    <th>Kode Inven UM</th>
                                    <th>Kode Inven PU</th>
                                    <th>Nomor PU</th>
                                    <th>Tanggal</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Luas PU</th>
                                    <th>Bentuk PU</th>
                                    <th>Koordinat X</th>
                                    <th>Koordinat Y</th>
                                    <th>NDVI</th>
                                    <th>MSAVI</th>
                                    <th>C</th>
                                    <th>D</th>
                                    <th>N</th>
                                    <th>Jenis Tanah</th>
                                    <th>Kelerengan</th>
                                    <th>Altitude</th>
                                    <th class="no-content">Hapus Data</th>
                                </tr>
                                </thead>
                                <tbody>                            
                                <?php
                                //data tabel invenpu
                                $tabelinvenpu = mysqli_query($conn, "SELECT * FROM inventarisasi_pu");
                                while ($datainvenpu = mysqli_fetch_array($tabelinvenpu)){
                                    $idinvenpu = $datainvenpu ['id'];
                                    $kodeinvenumpu = $datainvenpu ['Kode Inven UM'];
                                    $kodeinvenpu = $datainvenpu ['Kode Inven PU'];
                                    $nomorpu = $datainvenpu ['Nomor PU'];
                                    $tanggalinvenpu = $datainvenpu ['Tanggal']; 
                                    $pjinvenpu = $datainvenpu ['Penanggung Jawab'];
                                    $luasinvenpu = $datainvenpu ['Luas PU'];
                                    $bentukinvenpu = $datainvenpu ['Bentuk PU'];
                                    $koorxinvenpu = $datainvenpu ['Koordinat X'];
                                    $kooryinvenpu = $datainvenpu ['Koordinat Y'];
                                    $ndvi = $datainvenpu ['NDVI'];
                                    $msavi = $datainvenpu ['MSAVI'];
                                    $c = $datainvenpu ['C'];
                                    $d = $datainvenpu ['D'];
                                    $n = $datainvenpu ['N'];
                                    $jenistanah = $datainvenpu ['Jenis Tanah'];
                                    $kelerengan = $datainvenpu ['Kelerengan']; 
                                    $altitude = $datainvenpu ['Altitude'];

                                ?>
                                <tr>
                                    <td><?=$kodeinvenumpu;?></td>
                                    <td><?=$idinvenpu;?></td>
                                    <td><?=$nomorpu;?></td>
                                    <td><?=$tanggalinvenpu;?></td>
                                    <td><?=$pjinvenpu;?></td>
                                    <td><?=$luasinvenpu;?></td>
                                    <td><?=$bentukinvenpu;?></td>
                                    <td><?=$koorxinvenpu;?></td>
                                    <td><?=$kooryinvenpu;?></td>
                                    <td><?=$ndvi;?></td>
                                    <td><?=$msavi;?></td>
                                    <td><?=$c;?></td>
                                    <td><?=$d;?></td>
                                    <td><?=$n;?></td>
                                    <td><?=$jenistanah;?></td>
                                    <td><?=$kelerengan;?></td>
                                    <td><?=$altitude;?></td>
                                    <td>
                                        <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapusinvenpu<?=$idinvenpu;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal delete tabel invenpu-->
                                    <div class="modal fade" id="hapusinvenpu<?=$idinvenpu;?>" tabindex="-1" role="dialog" aria-labelledby="hapusinvenpulabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusinvenpulabel">Hapus Data Petak Ukur & Kondisi Tapak</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert-light-primary border-0 mb-4">
                                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                        </div>
                                                    <form class="form-vertical" method="post">
                                                            <li class="list-group-item">Kode Inven UM = <?=$kodeinvenumpu;?></li>
                                                            <li class="list-group-item">Kode Inven PU = <?=$idinvenpu;?></li>
                                                            <li class="list-group-item">Nomor PU = <?=$nomorpu;?></li>
                                                            <li class="list-group-item">Tanggal = <?=$tanggalinvenpu;?></li>
                                                            <li class="list-group-item">Penanggung Jawab = <?=$pjinvenpu;?></li>
                                                            <li class="list-group-item">Luas PU = <?=$luasinvenpu;?></li>
                                                            <li class="list-group-item">Bentuk PU = <?=$bentukinvenpu;?></li>
                                                            <li class="list-group-item">Koordinat X = <?=$koorxinvenpu;?></li>
                                                            <li class="list-group-item">Koordinat Y = <?=$kooryinvenpu;?></li>
                                                            <li class="list-group-item">NDVI = <?=$ndvi;?></li>
                                                            <li class="list-group-item">MSAVI = <?=$msavi;?></li>
                                                            <li class="list-group-item">C = <?=$c;?></li>
                                                            <li class="list-group-item">D = <?=$d;?></li>
                                                            <li class="list-group-item">N = <?=$n;?></li>
                                                            <li class="list-group-item">Jenis Tanah = <?=$jenistanah;?></li>
                                                            <li class="list-group-item">Kelerengan = <?=$kelerengan;?></li>
                                                            <li class="list-group-item">Altitude = <?=$altitude;?></li>
                                                        <div class="form-group mb-4">
                                                            <input type="hidden" value = "<?=$idinvenpu;?>" name="idinvenpu" > 
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                            <button type="submit" name="hapusinvenpu" class="btn btn-danger">Hapus</button>
                                                            </div>     
                                                    </form>         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal delete tabel inven pu -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end Inven PU -->
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2022, Rebuild & Reconstruct by<a target="#" href="#"> endyarfian</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="plugins/highlight/highlight.pack.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="plugins/sweetalerts/custom-sweetalert.js"></script>
    <!-- END THEME GLOBAL STYLE -->  
    
    <!-- MODAL -->
    <!-- Modal inven-->
    <div class="modal fade" id="inven" tabindex="-1" role="dialog" aria-labelledby="invenlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invenlabel">Input Data Inventarisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-vertical" method="post">
                    <input type="hidden" name="idinven" >
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Inventarisasi</label>
                            <input type="text" name="kodeinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan kode inventarisasi.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Nomor SK</label>
                            <input type="text" name="nomorskinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan nomor SK inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Tanggal Berlaku</label>
                            <input type="date" name="tanggalberlakuinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan tanggal berlaku inventarisasi.</small>
                                </span>
                            </div> 
                        </div><div class="form-group mb-4">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggalselesaiinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan tanggal selesasi inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Penanggung Jawab</label>
                            <input type="text" name="pjinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan penanggung jawab inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Metode</label>
                            <input type="text" name="metodeinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan metode inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Indeks Sampling</label>
                            <input type="text" name="isinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan indeks sampling inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Bentuk Petak Ukur</label>
                            <input type="text" name="bentukpuinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan bentuk petak ukur inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Luas Petak Ukur</label>
                            <input type="text" name="luaspuinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan luas petak ukur inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Rencana Kegiatan Tahunan</label>
                            <select class="form-control" Name="kodertkinven">
                            <?php 
                                $getkodertk = mysqli_query($conn, "SELECT * FROM rttahunankegiatan");
                                while($rowkodertk = mysqli_fetch_array($getkodertk)){?>
                                <option><?php echo $rowkodertk ['Kode Rencana Tahunan Kegiatan']?></option>
                                <?php } ?>
                            </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih acuan Kode Kegiatan Tahunan</small>
                                </span>
                            </div>  
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsiinven" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Tulis deskripsi inventarisasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                        <button type="submit" name="inputinven" class="btn btn-primary snackbar-bg-success">Simpan</button>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
    <!-- end modal inven -->
    <!-- Modal inven UMT-->
    <div class="modal fade" id="invenumt" tabindex="-1" role="dialog" aria-labelledby="umtlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invenumtlabel">Input Data Populasi Tanaman pada Unit Manajemen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-vertical" method="post">
                    <input type="hidden" name="idinvenumt" >
                    <div class="form-group mb-4">
                            <label class="form-label">Kode Inventarisasi UM</label>
                            <input type="text" name="kodeinvenum" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan kode inventarisasi unit manajemen.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Inventarisasi</label>
                            <select class="form-control" Name="kodeinven2">
                            <?php 
                                $getkodeinven = mysqli_query($conn, "SELECT * FROM inventarisasi");
                                while($rowkodeinven = mysqli_fetch_array($getkodeinven)){?>
                                <option><?php echo $rowkodeinven ['Kode Inventarisasi']?></option>
                                <?php } ?>
                            </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode inventarisasi.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Tanaman Cucu petak</label>
                            <select class="form-control" Name="kodecupetumt">
                            <?php 
                                $getkodecupetumt = mysqli_query($conn, "SELECT * FROM umt_cupet_tnm");
                                while($rowkodecupetumt = mysqli_fetch_array($getkodecupetumt)){?>
                                <option><?php echo $rowkodecupetumt ['KodeCupet_Tnm']?></option>
                                <?php } ?>
                            </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode tanaman cucu petak.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggalinvenumt" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan tanggal.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Penanggung Jawab</label>
                            <input type="text" name="pjinvenumt" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan penanggung jawab inven umt.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                        <button type="submit" name="inputinvenumt" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
    <!-- end modal inven UMT -->
    <!-- Modal invenpu-->
    <div class="modal fade" id="invenpu" tabindex="-1" role="dialog" aria-labelledby="invenpulabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invenpulabel">Input Data Petak Ukur & Kondisi Tapak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-vertical" method="post">
                    <input type="hidden" name="idinvenpu" >
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Inventarisasi UM</label>
                            <select class="form-control" Name="kodeinvenumpu">
                            <?php 
                                $getkodeinvenumpu = mysqli_query($conn, "SELECT * FROM inventarisasi_umt");
                                while($rowkodeinvenumpu = mysqli_fetch_array($getkodeinvenumpu)){?>
                                <option><?php echo $rowkodeinvenumpu ['Kode Inven UM']?></option>
                                <?php } ?>
                            </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode inventarisasi unit manajemen.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Inven PU</label>
                            <input type="text" name="kodeinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan kode onventarisasi petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Nomor PU</label>
                            <input type="text" name="nomorpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan nomor petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggalinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan tanggal inventarisasi petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Penanggung Jawab</label>
                            <input type="text" name="pjinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan penanggung jawab inventarisasi petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Luas PU</label>
                            <input type="text" name="luasinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan luasan petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Bentuk PU</label>
                            <input type="text" name="bentukinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan bentuk petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Koordinat X</label>
                            <input type="text" name="koorxinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan koordinat X petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Koordinat Y</label>
                            <input type="text" name="kooryinvenpu" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan koordinat Y petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label"><i>Normalized Difference Vegetation Index</i></label>
                            <input type="text" name="ndvi" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan indeks vegetasi.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label"><i>Modified Soil Adjusted Vegetation Index</i></label>
                            <input type="text" name="msavi" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan nilai MSAVI.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label"><i>Canopy</i></label>
                            <input type="text" name="c" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan nilai indeks C.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label"><i>Density</i></label>
                            <input type="text" name="d" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan nulai indeks D.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label"><i>N</i></label>
                            <input type="text" name="n" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan N pohon.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Jenis Tanah</label>
                            <input type="text" name="jenistanah" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan jenis tanah.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kelerengan</label>
                            <input type="text" name="kelerengan" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan persentase kelerengan.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Altitude</label>
                            <input type="text" name="altitude" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan ketinggian petak ukur.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                        <button type="submit" name="inputinvenpu" class="btn btn-primary snackbar-bg-success">Simpan</button>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
    <!-- end modal zonasi -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- tabel penataan kawasan js -->
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
    <!-- tabel umt -->
    <script>
        $('#zero-config1').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
    <!-- tabel zonasi -->
    <script>
        $('#zero-config2').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
    <!-- tabel lmu -->
    <script>
        $('#zero-config3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>


</body>
</html>