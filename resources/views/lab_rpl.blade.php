@extends('layout.navbar')

@section('isi')

    <!-- START WRAPPER -->
    <div class="wrapper">

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
                            <h5 class="breadcrumbs-title">Lab. RPL</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">Lab. RPL</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            <!--start container-->
            <div class="container">
                <h1>Laboratorium yang digunakan untuk melayani praktikum beberapa mata kuliah </h1>
                <div id="invoice">
                    <div class="invoice-header">
                        <div class="row section">
                            <div class="col s12 m6 l6">
                                <img src="images/lab_rpl.jpg" width="900" height="500" alt=""><br><br><br>
                            </div>
                        </div>
                        <ol>
                            <b>Prodi D3 Manajemen Informatika</b><br><br>
                            <li>Algoritma dan Pemrograman</li>
                            <li>Pemrograman Struktur Data</li>
                            <li>Pemrograman Berorientasi Objek</li>
                            <li>Pemrograman Web 1</li>
                            <li>Pemrograman Web 2</li>
                            <li>Pemrograman Visual 1</li>
                            <li>Pemrograman Visual 2</li>
                            <li>Mobile Programming</li>
                        </ol>
                        <ol>
                            <b>Dasar-dasar pemrograman</b><br><br>

                            <li>Struktur Data</li>
                            <li>Pemrograman Berbasis Objek</li>
                            <li>Rekayasa Perangkat Lunak</li>
                            <li>Teknik Komputasi</li>
                            <li>Kecerdasan Buatan</li>
                            <li>Mobile Programming</li>
                            <li>Pemrograman Game</li>
                    </div>
                </div>
                <!--start container-->
                <div class="container">
                    <div class="section">
                        <br><br>
                    </div>
                </div>
                <!--end container-->
        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

<!-- jQuery Library -->
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--prism-->
<script type="text/javascript" src="js/plugins/prism/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartist -->
<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>


@endsection