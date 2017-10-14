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
    <meta name="msapplication-TileImage" content="images/favicon/{{asset('images/lambangunesa.jpg')}}" sizes="144x144">
    <!-- For Windows Phone -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">

    <!-- CORE CSS-->
    <link href="{{ asset ('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset ('css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ asset ('css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

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

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="beranda" class="brand-logo darken-1"><img src="{{asset ('images/teknikinformatika.png')}}" alt="" style="width: 33px"><span> Teknik Informatika</span></a> </h1></li>
                </ul>
                {{--<ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                        </a>
                    </li>
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>--}}
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

<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">

        <li class="bold active"><a href="beranda" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>MENU</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-account-balance"></i>Tentang Kami</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="sejarah">Sejarah</a></li>
                            <li><a href="visimisi">Visi & Misi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i>Program Studi</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="informatika">S1 Teknik Informatika</a></li>
                            <li><a href="pendidikan">S1 Pend. T. Informasi</a></li>
                            <li><a href="sisteminfo">S1 Sistem Informasi</a></li>
                            <li><a href="manajemen">D3 Manajemen Inf</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a href="struktur_organisasi" class="waves-effect waves-cyan"><i class="mdi-image-grid-on"></i>Struktur Organisasi</a>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-group"></i>Data Tenaga Kerja</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="dosen">Data Dosen</a>
                            </li>
                            <li><a href="table-data.html">Data Staff Karyawan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-account-balance"></i>Sarana Prasarana</a>
                    <div class="collapsible-body">
                        <ul>
                            @foreach($ketsarana as $sarana)
                            <li><a href="{{url('sarana',[$sarana->id])}}">{{$sarana->nama}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="bold"><a href="kontak" class="waves-effect waves-cyan"><i class="mdi-action-perm-contact-cal"></i>Kontak</a>
        </li>
        <li class="bold"><a href="galeri" class="waves-effect waves-cyan"><i class="mdi-image-collections"></i>Galeri</a>
        </li>
        <li class="bold"><a href="lokasi" class="waves-effect waves-cyan"><i class="mdi-action-room"></i>Peta Lokasi</a>
        </li>
        <li class="bold"><a href="beasiswa" class="waves-effect waves-cyan"><i class="mdi-action-info"></i>Info Beasiswa</a>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>

</aside>
<!-- END LEFT SIDEBAR NAV-->

<div id="main">

    @yield('isi')

</div>

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


<script type="text/javascript">
    /*
     * Masonry container for Gallery page
     */
    var $containerGallery = $(".masonry-gallery-wrapper");
    $containerGallery.imagesLoaded(function() {
        $containerGallery.masonry({
            itemSelector: '.gallary-item img',
            columnWidth: '.gallary-sizer',
            isFitWidth: true
        });
    });

    //popup-gallery
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: true,
        fixedContentPos: true,
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            verticalFit: true,
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        }
    });
</script>