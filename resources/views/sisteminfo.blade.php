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
                            <h5 class="breadcrumbs-title">Program Studi S1 Sistem Informasi</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">S1 Sistem Informasi</li>
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
                    <p>"Program Studi yang menjadi pusat penelitian dan pengembangan keahlian Sistem Informasi yang unggul secara keilmuan
                    dan keahlian teknis yang relevan dengan kebutuhan pasar kerja nasional dan global serta berkontribusi di bidang Sistem Informasi Indonesia."</p>
                </div>
                <div class="section">
                    <p class="caption">Misi</p>
                    <div class="divider"></div><br>
                    <ol>
                        <li>Menyelenggarakan proses pendidikan Sistem Informasi yang berlandaskan keilmuan Sistem Informasi yang berorientasi pada kebutuhan terkini.</li>
                        <li>Menyelenggarakan penelitian dan pengembangan ilmu untuk menghasilkan karya akademik yang unggul dan menjadi rujukan dalam keilmuan Sistem Informasi.</li>
                        <li>Mengembangkan produktivitas tenaga pendidik dalam rangka menerapkan Tridharma sehingga mampu meningkatkan nilai tambah sumber daya Sistem Informasi Indonesia.</li>
                        <li>Secara aktif menjalin kerjasama dan kolaborasi dengan dunia usaha/industri dan lembaga profesi baik dalam tingkat lokal, regional, nasional dan internasional untuk penerapan dan pengembangan keilmuan Sistem Informasi.</li>
                    </ol>
                </div>
                <br><br><br><br>
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

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>

@endsection