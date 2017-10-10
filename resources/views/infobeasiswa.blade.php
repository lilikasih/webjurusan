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
    <link rel="icon" href="{{asset('images/lambangunesa.jpg')}}" sizes="35x35">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/lambangunesa.jpg')}}" sizes="152x152">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/lambangunesa.jpg" sizes="144x144">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{{ asset ('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset ('css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ asset ('css/custom/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset ('js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset ('js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset ('ajs/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


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
                    <li><h1 class="logo-wrapper"><a href="{{route('beranda')}}" class="brand-logo darken-1"><img src="{{asset ('images/teknikinformatika.png')}}" alt="" style="width: 33px"><span> Teknik Informatika</span></a> </h1></li>
                </ul>
                {{--<div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search..."/>
                </div>--}}
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

    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START CONTENT -->
        <section id="content">

             <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search...">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <ol class="breadcrumbs">
                                <li><a href="{{ route('beranda') }}">Kembali ke Beranda</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            <div class="container">
                <center><h1>{{$Beasiswa->nama}}</h1></center>

                <!--chart dashboard start-->
                <div id="chart-dashboard">

                    <center><img src="{{asset ('images/'.$Beasiswa->foto)}}" style="object-fit:cover"  width="60%" height="auto"></center>
                    <p style="text-align: justify; padding-left: 10%; padding-right: 10%"  >{!!$Beasiswa->isi!!}</p>
                </div>
            </div>
                <!--end container-->
        </section>
        <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

<!-- START FOOTER -->
<br><br><br><br>
<footer class="page-footer">

    <div class="footer-copyright">
        <div class="container">
            Copyright © 2017 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> Jurusan Teknik Informatika Fakultas Teknik Universitas Negeri Surabaya
        </div>
    </div>
</footer>
<!-- END FOOTER -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset ('js/plugins/jquery-1.11.2.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset ('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ asset ('js/plugins/chartist-js/chartist.min.js')}}"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="{{ asset ('js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('js/plugins/chartjs/chart-script.js')}}"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="{{ asset ('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('js/plugins/sparkline/sparkline-script.js')}}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset ('js/plugins.min.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset ('js/custom-script.js')}}"></script>