@extends('layouts.navbar')

@section('isi')

    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Data Dosen</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">Data Dosen</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            <!--start container-->
            <div class="container">
                <div class="section">

                    <p class="caption">Berikut Daftar Dosen di Jurusan Teknik Informatika Universitas Negeri Surabaya :</p>
                    <div class="divider"></div>

                    <div class="row">
                        @foreach ($listdosen as $dosen)

                            <div class="col s12 m4 grid">
                                <figure class="effect-lily">
                                    <center><img src="images/Dosen/{{$dosen->foto}}" width="200px" height="210px" alt=""/></center>
                                    <figcaption>
                                        <div style="text-align: center">
                                            <br><label>Nama :</label>
                                            <p>{{$dosen->nama}}</p>
                                            <label>NIP :</label>
                                            <p>{{$dosen->id}}</p>
                                            <label>Prodi :</label>
                                            <p>{{$dosen->prodi}}</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <!-- END WRAPPER -->

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


@endsection
