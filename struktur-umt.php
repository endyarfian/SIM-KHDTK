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
    <title>Kompartemenisasi UMT - Sistem Informasi Manejemen KHDTK UGM </title>
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
    <link href="plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
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
                        <a href="index.html">
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
                                <a href="Laporan.php"> Laporan</a>
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

                    <li class="menu active">
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
                            <li  class="active">
                                <a href="struktur-umt.php"> Struktur Kawasan UMT  </a>
                            </li>
                            <li>
                                <a href="tanaman-umt.php"> Jenis Tanaman pada UMT </a>
                            </li>                            
                        </ul>
                    </li>
                    <!--  end penataan kawasan  -->

                    <!--  BEGIN potensi sdh  -->
                    <li class="menu">
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
                            <li>
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
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>AKUN</span></div>
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
                    <!-- begin tabel penataan kawasan -->
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="page-header">
                            
                                <div class="page-title breadcrumb-four">
                                    <ul class="breadcrumb">
                                        <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
                                        </li>
                                        <li><a href="javscript:void(0);">
                                        Penataan Kawasan & Pengorganisasian Kawasan</a></li>
                                        <li  class="active"><a href="javscript:void(0);">
                                        Struktur Kawasan UMT</a></li>
                                    </ul>
                                    <br>
                                    <br>
                                <h3>DATA ANAK PETAK</h3>  
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <table id="zero-config1" class="table table-striped" style="width:100%">
                                    <div class="col-lg-6 layout-top-spacing">
                                    <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#anakpetak" >
                                        Input Data
                                    </button> 
                                    </div>
                                <thead>
                                <tr>
                                    <th>Kode Anak Petak</th>
                                    <th>Anak Petak</th>
                                    <th>Kode UMT</th>
                                    <th class="no-content">Hapus Data</th>
                                </tr>
                                </thead>
                                <tbody>                            
                                <?php
                                //data tabel anak petak
                                $tabelanakpetak = mysqli_query($conn, "SELECT * FROM umt_anakpetak");
                                while ($dataanakpetak = mysqli_fetch_array($tabelanakpetak)){
                                    $idanakpetak = $dataanakpetak ['id'];
                                ?>
                                <tr>
                                    <td><?= $dataanakpetak ['Kode Anak Petak'];?></td>
                                    <td><?= $dataanakpetak ['Anak Petak'];?></td>
                                    <td><?= $dataanakpetak ['Kode UMT'];?></td>
                                    <td>
                                        <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapusanakpetak<?=$idanakpetak;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        </button>
                                    </td>
                                </tr>
                                        <!-- Modal delete tabel anak petak-->
                                        <div class="modal fade" id="hapusanakpetak<?=$idanakpetak;?>" tabindex="-1" role="dialog" aria-labelledby="hapusanakpetaklabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusanakpetaklabel">Hapus Data Anak Petak</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert-light-primary border-0 mb-4">
                                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                        </div>
                                                    <form class="form-vertical" method="post">
                                                        <li class="list-group-item">Kode Anak Petak = <?= $dataanakpetak ['Kode Anak Petak'];?></li>
                                                        <li class="list-group-item">Anak Petak = <?= $dataanakpetak ['Anak Petak'];?></li>
                                                        <li class="list-group-item">Kode UMT = <?= $dataanakpetak ['Kode UMT'];?></li>
                                                        <div class="form-group mb-4">
                                                            <input type="hidden" value = "<?=$idanakpetak;?>" name="idanakpetak" > 
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                            <button type="submit" name="hapusanakpetak" class="btn btn-danger">Hapus</button>
                                                            </div>     
                                                    </form>         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal delete tabel anak petak -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end tabel anak petak -->
                <!-- begin cucu petak -->
                <div class="row" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>DATA CUCU PETAK</h3>  
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <table id="zero-config2" class="table table-striped" style="width:100%">
                                    <div class="col-lg-6 layout-top-spacing">
                                    <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#cucupetak" >
                                        Input Data
                                    </button> 
                                    </div>
                                <thead>
                                <tr>
                                    <th>Kode Anak Petak</th>
                                    <th>Kode Cucu Petak</th>
                                    <th>Kode Zonasi LMU</th>
                                    <th>Luas</th>
                                    <th>Koordinat X</th>
                                    <th>Koordinat Y</th>
                                    <th class="no-content">Hapus Data</th>
                                </tr>
                                </thead>
                                <tbody>                            
                                <?php
                                //data tabel cucu petak
                                $tabelcucupetak = mysqli_query($conn, "SELECT * FROM umt_cucupetak");
                                while ($datacucupetak = mysqli_fetch_array($tabelcucupetak)){
                                    $idcucupetak = $datacucupetak ['id'];
                                ?>
                                <tr>
                                    <td><?= $datacucupetak ['Kode Anak Petak'];?></td>
                                    <td><?= $datacucupetak ['Kode Cucu Petak'];?></td>
                                    <td><?= $datacucupetak ['Kode Zonasi LMU'];?></td>
                                    <td><?= $datacucupetak ['Luas'];?></td>
                                    <td><?= $datacucupetak ['Koordinat X'];?></td>
                                    <td><?= $datacucupetak ['Koordinat Y'];?></td>
                                    <td>
                                        <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapuscucupetak<?=$idcucupetak;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal delete tabel cucu petak-->
                                    <div class="modal fade" id="hapuscucupetak<?=$idcucupetak;?>" tabindex="-1" role="dialog" aria-labelledby="hapuscucupetaklabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapuscucupetaklabel">Hapus Data Cucu Petak</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert-light-primary border-0 mb-4">
                                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                        </div>
                                                    <form class="form-vertical" method="post">
                                                        <li class="list-group-item">Kode Anak Petak = <?= $datacucupetak ['Kode Anak Petak'];?></li>
                                                        <li class="list-group-item">Kode Cucu Petak = <?= $datacucupetak['Kode Cucu Petak'];?></li>
                                                        <li class="list-group-item">Kode Zonasi LMU = <?= $datacucupetak['Kode Zonasi LMU'];?></li>
                                                        <li class="list-group-item">Luas = <?= $datacucupetak['Luas'];?></li>
                                                        <li class="list-group-item">Koordinat X = <?= $datacucupetak['Koordinat X'];?></li>
                                                        <li class="list-group-item">Koordinat Y = <?= $datacucupetak['Koordinat Y'];?></li>
                                                        <div class="form-group mb-4">
                                                            <input type="hidden" value = "<?=$idcucupetak;?>" name="idcucupetak" > 
                                                        </div>
                                                            <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                            <button type="submit" name="hapuscucupetak" class="btn btn-danger">Hapus</button>
                                                            </div>     
                                                    </form>         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal delete tabel cucupetak -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end cucupetak -->
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
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- MODAL -->
    <!-- Modal cucu Petak-->
    <div class="modal fade" id="cucupetak" tabindex="-1" role="dialog" aria-labelledby="cucupetaklabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cucupetaklabel">Input Data Anak Petak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-vertical" method="post">
                    <input type="hidden" name="idcucupetak" >
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Anak Petak</label>
                            <select name="kodeanakpetakcupet" class="form-control" >
                                <?php 
                                    $getkodeanakpetak = mysqli_query($conn, "SELECT * FROM umt_anakpetak");
                                    while($rowkodeanakpetak = mysqli_fetch_array($getkodeanakpetak)){?>
                                    <option><?php echo $rowkodeanakpetak ['Kode Anak Petak']?></option>
                                    <?php } ?>
                                </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode anak petak.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Cucu Petak</label>
                            <input type="text" name="kodecucupetak" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan kode cucu petak.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Zonasi LMU</label>
                            <select name="kodezonasilmucupet" class="form-control" >
                                <?php 
                                    $getkodezonasi = mysqli_query($conn, "SELECT * FROM zonasi_lmu");
                                    while($rowkodezonasi = mysqli_fetch_array($getkodezonasi)){?>
                                    <option><?php echo $rowkodezonasi ['Kode Zonasi LMU']?></option>
                                    <?php } ?>
                                </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode zonasi LMU.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Luas</label>
                            <input type="text" class="form-control" Name="luas">
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan luas kawasan.</small>
                                </span>
                            </div>  
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Koordinat X</label>
                            <input type="text" class="form-control" Name="koorx">
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan koordinat x kawasan.</small>
                                </span>
                            </div>  
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Koordinat Y</label>
                            <input type="text" class="form-control" Name="koory">
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan koordinat y kawasan.</small>
                                </span>
                            </div>  
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                        <button type="submit" name="inputcucupetak" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
    <!-- end modal cucu petak -->
    <!-- Modal anak petak-->
    <div class="modal fade" id="anakpetak" tabindex="-1" role="dialog" aria-labelledby="anakpetaklabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anakpetaklabel">Input Data Anak Petak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-vertical" method="post">
                    <input type="hidden" name="idanakpetak" >
                        <div class="form-group mb-4">
                            <label class="form-label">Kode Anak Petak</label>
                            <input type="text" class="form-control" Name="kodeanakpetak2">
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan kode anak petak.</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Anak Petak</label>
                            <input type="text" name="anakpetak" class="form-control" >
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Masukkan anak petak.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Kode UMT</label>
                            <select name="kodeumt" class="form-control" >
                              <?php 
                                    $getkodeumt = mysqli_query($conn, "SELECT * FROM umt");
                                    while($rowkodeumt = mysqli_fetch_array($getkodeumt)){?>
                                    <option><?php echo $rowkodeumt ['Kode UMT']?></option>
                                    <?php } ?>
                                </select>
                            <div class=" mt-1">
                                <span class="badge badge-success">
                                    <small id="sh-text4" class="form-text mt-0">Pilih kode UMT.</small>
                                </span>
                            </div> 
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                        <button type="submit" name="inputanakpetak" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>               
                </div>
            </div>
        </div>
    </div>
    <!-- end modal cucu patak -->

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
    <!-- toastr -->
    <script src="plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/components/notification/custom-snackbar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <script>
        $('.snackbar-bg-success').click(function() {
    Snackbar.show({
        text: 'Success',
        actionTextColor: '#fff',
        backgroundColor: '#1abc9c'
    });
    });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>