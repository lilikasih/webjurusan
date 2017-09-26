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
    <title>S1 Teknik Informatika</title>

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
    <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
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
                    <li><h1 class="logo-wrapper"><a href="beranda" class="brand-logo darken-1"><img src="images/logounesa.png" alt=""></a> <span class="logo-text">Informatika</span></h1></li>
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

                <li class="bold active"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>MENU</a>
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
                                    <li><a href="css-typography.html">Sejarah</a>
                                    </li>
                                    <li><a href="css-icons.html">Visi & Misi</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i>Program Studi</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ui-alerts.html">S1 Teknik Informatika</a>
                                    </li>
                                    <li><a href="ui-buttons.html">S1 Pend. T. Informasi</a>
                                    </li>
                                    <li><a href="ui-badges.html">S1 Sistem Informasi</a>
                                    </li>
                                    <li><a href="ui-breadcrumbs.html">D3 Manajemen Inf</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-image-grid-on"></i>Struktur Organisasi</a>
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
                                    <li><a href="#">Ruang Kuliah</a>
                                    </li>
                                    <li><a href="#">Lab RPL</a>
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
                <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-action-perm-contact-cal"></i>Kontak</a>
                </li>
                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-action-room"></i>Peta Lokasi</a>
                </li>
                <li class="li-hover"><div class="divider"></div></li>

            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Program Studi S1 Teknik Informatika</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">S1 Teknik Informatika</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">
                    <p class="caption">Visi</p>
                    <div class="divider"></div><br>
                    <p>“Mewujudkan Program Studi yang unggul dalam pengembangan teknologi informasi yang berkarakter dalam skala nasional”</p>
                </div>
                <div class="section">
                    <p class="caption">Misi</p>
                    <div class="divider"></div><br>
                    <ol>
                        <li>Menyelenggarakan manajemen prodi yang kredibel, akuntabel dan transparan sesuai standar penjaminan mutu.</li>
                        <li>Menghasilkan lulusan yang berkompeten dan berkarakter.</li>
                        <li>Melaksanakan penelitian dibidang teknologi informasi dan hasil-hasilnya dipublikasikan minimal ditingkat nasional.</li>
                        <li>Melaksanakan pengabdian kepada masyarakat dalam menerapkan keilmuannya.</li>
                        <li>Menjalin kerjasama yang berkelanjutan dengan berbagai instansi dan dunia industri.</li>
                    </ol>
                </div>
                <br><br><br>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

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
<!--prism
<script type="text/javascript" src="js/prism/prism.js"></script>-->
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartist -->
<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>