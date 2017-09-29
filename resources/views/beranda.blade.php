<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Jurusan Teknik Informatika</title>

    <!-- Favicons-->
    <link rel="icon" href="images/lambangunesa.jpg" sizes="35x35">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/lambangunesa.jpg" sizes="152x152">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/lambangunesa.jpg" sizes="144x144">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li><h1 class="logo-wrapper"><a href="beranda" class="brand-logo darken-1"><img src="images/lambangunesa.png" alt="materialize logo" style="width: 30px"><span> Informatika</span></a> </h1></li>

                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search..."/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    </ul>
                    </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">

                <li class="bold active"><a href="beranda" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>MENU</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">

                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-account-balance"></i>Tentang Kami</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="sejarah">Sejarah</a>
                                    </li>
                                    <li><a href="visimisi">Visi & Misi</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i>Program Studi</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="informatika">S1 Teknik Informatika</a>
                                    </li>
                                    <li><a href="pendidikan">S1 Pend. T. Informasi</a>
                                    </li>
                                    <li><a href="sisteminfo">S1 Sistem Informasi</a>
                                    </li>
                                    <li><a href="manajemen">D3 Manajemen Inf</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a href="struktur_organisasi" class="waves-effect waves-cyan"><i class="mdi-image-grid-on"></i>Struktur Organisasi</a>
                        </li>

                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-group"></i>Data Tenaga Kerja</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="table-basic.html">Data Dosen</a>
                                    </li>
                                    <li><a href="table-data.html">Data Staff Karyawan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i>Sarana Prasarana</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ruangkuliah">Ruang Kuliah</a>
                                    </li>
                                    <li><a href="lab_rpl">Lab RPL</a>
                                    </li>
                                    <li><a href="#">Lab Jaringan Komputer</a>
                                    </li>
                                    <li><a href="#">Lab Multimedia</a>
                                    </li>
                                    <li><a href="#">Ruang Baca</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                    <li class="bold"><a href="kontak" class="waves-effect waves-cyan"><i class="mdi-action-perm-contact-cal"></i>Kontak</a>
                    </li>
                    <li class="bold"><a href="lokasi" class="waves-effect waves-cyan"><i class="mdi-action-room"></i>Peta Lokasi</a>
                    </li>
                <li class="li-hover"><div class="divider"></div></li>

            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">

                            <h2 class="judul" style="text-align:center">Selamat Datang</h2>
                            <h1 class="judul" style="text-align:center">di Jurusan Teknik Informatika Universitas Negeri Surabaya</h1>
                            <img src="images/foto.jpg" class="fix" width="1100" height="500">


                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">

                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"></i>S1 Teknik Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="informatika"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"></i>S1 Sistem Informasi</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="sisteminfo"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"></i>S1 Pend. T. Informasi</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="pendidikan"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"></i>D3 Manajemen Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="manajemen"><i class="mdi-hardware-keyboard-arrow-up"></i></a>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                       <div class="row">
                            <!-- blog card -->
                            <div class="col s12 m12 l4">
                                <div class="blog-card" >
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <a href="porjur"><img src="images/porjur.jpg" alt="blog-img"></a>
                                    </div>
                                    <div class="card-content">
                                        <p class="row">
                                          <span class="left"><a href="porjur">Porjur</a></span>
                                          <span class="right">15 Juni 2016</span>
                                        </p>
                                        <h4 class="card-title grey-text text-darken-4"><a href="porjur" class="grey-text text-darken-4">Pekan Olahraga Jurusan: Junjung Tinggi Sportivitas, Terapkan Solidaritas</a>
                                        </h4>                                        
                                        <div class="row">
                                          <div class="col s9"> By <a>Brain Informatika</a></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                           <div class="col s12 m12 l4">
                               <div class="blog-card" >
                                   <div class="card">
                                       <div class="card-image waves-effect waves-block waves-light">
                                           <img src="images/IC.jpg" alt="blog-img">
                                       </div>
                                       <div class="card-content">
                                           <p class="row">
                                               <span class="left"><a href="">Informatics Champion</a></span>
                                               <span class="right">03 November 2016</span>
                                           </p>
                                           <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Mengasah Bakat Teknologi Melalui Informatics Champion</a>
                                           </h4>
                                           <div class="row">
                                               <div class="col s9"> By <a href="#">Brain Informatika</a></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="col s12 m12 l4">
                               <div class="blog-card" >
                                   <div class="card">
                                       <div class="card-image waves-effect waves-block waves-light">
                                           <img src="images/dialogjurusan.jpg" alt="blog-img">
                                       </div>
                                       <div class="card-content">
                                           <p class="row">
                                               <span class="left"><a href="">Dialog Jurusan</a></span>
                                               <span class="right">25 Mei 2016</span>
                                           </p>
                                           <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Mewadahi Aspirasi Mahasiswa Melalui Dialog Jurusan</a>
                                           </h4>
                                           <div class="row">
                                               <div class="col s9"> By <a href="#">Brain Informatika</a></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                    </div>
                        <br><br><br>
                    <!--card widgets end-->
                    </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> Jurusan Teknik Informatika Fakultas Teknik Universitas Negeri Surabaya
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hello. Welcome to the Informatics Website</span>', 1500);
        }, 1500);

    });
    </script>
</body>

</html>