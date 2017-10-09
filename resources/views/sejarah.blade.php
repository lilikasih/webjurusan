@extends('layouts.navbar')

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
                                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search...">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <h4 class="breadcrumbs-title">Sejarah</h4>
                                                    <ol class="breadcrumbs">
                                                        <li><a href="beranda">Beranda</a></li>
                                                        <li class="=active">Sejarah</a></li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <!--breadcrumbs end-->
                    <div class="container">
                        <center><h1>Sejarah Jurusan Teknik Informatika</h1></center>

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">

                             <p style="text-align: justify">
                            Jurusan Teknik Informatika adalah satu dari lima jurusan yang ada di selingkung Fakultas Teknik (FT) Universitas Negeri Surabaya (UNESA). Jurusan Teknik  Informatika cikal bakalnya berasal dari jurursan Teknik Elektro pada
                                 Prodi D3 Manajemen Informatika dan S1 Pendidikan Teknologi nformasi, setelah proses pengajuan kepada DIKTI untuk pendirian jurusan Teknik  Informatika pada tahun 2012.
                            <br><br> Latar belakang bagaimana munculnya Program Studi D3 Manajemen Informatika dan S1 Pendidikan Teknologi Informatika dalam Jurusan Teknik Elektro adalah sebagai berikut:
                                 Pada awalnya masyarakat sangat mengharapkan dibukanya program studi berbasis IT karena
                                 pada saat itu (awal tahun 2000) sedang ada percepatan alih teknologi terutama teknologi informasi, serta industri sangat menunggu lulusan diploma berkompetensi bidang teknologi informasi. Sehingga mulailah dicangkokkannya kepeminatan teknik informatika pada program studi D3 Teknik Listrik.</p>
                            
                         <center><img src="images/A1.png" style="object-fit:cover"  width="700" height="600"></center>
                            <p style="text-align: justify">Jurusan Teknik Elektro untuk membuka program studi sendiri yang akhirnya turun pada tahun 2009 dengan nama program studi D3 Manajemen informatika. Ijin penyelenggaraan Program studi D3 Manajemen Informatika di Jurusan Teknik Elektro Fakultas Teknik UNESA adalah
                                dengan SK Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Nomor: 2955/D/T/2008 pada tanggal 4 September 2008. Kemudian dilanjutkan dengan SK dari Rektor Unesa dengan Nomor: 2238/UN38.I/PP/2012 perihal Perpanjangan Prodi dan Pengajuan Akreditasi kepada BAN-PT pada tanggal 19 April 2012.
                            <br><br>Jurusan Teknik Elektro berusaha untuk mengajukan program studi baru bernama S1 Pendidikan Teknologi Informatika (S1 PTI) untuk mendukung pencapaian jumlah guru TIK yang mengajar di SMK sesui dengan Renstra Depdiknas 2005-2009, menuju pembangunan pendidikan nasional jangka panjang 2025 disebutkan bahwa target rasio jumlah SMA dan SMK tahun 2009 sebesar 60:40; tahun 2015 sebesar 50:50; tahun 2020 sebesar 40:60, dan tahun 2025 sebesar 30:70 (Depdiknas,2005). Ijin penyelenggaraan prodi berdasar SK pendirian 201/E/O/2012 tanggal  5 Juni 2012.</p>

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