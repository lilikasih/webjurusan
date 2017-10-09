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
                            <h5 class="breadcrumbs-title">Program Studi S1 Pendidikan Teknologi Informasi</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">S1 Pendidikan Teknologi Informasi</li>
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
                    <p>"Visi program studi S1 Pendidikan Teknologi Informasi adalah mengembangkan pendidikan kejuruan dalam ilmu teknologi informasi serta menjadi pusat studi pendidikan teknologi informasi yang berorientasi kewirausahaan."</p>
                </div>
                <div class="section">
                    <p class="caption">Misi</p>
                    <div class="divider"></div><br>
                    <ol>
                        <li>Menyelenggarakan pendidikan untuk menghasilkan lulusan dalam bidang pendidikan teknologi informasi yang relevan dengan kebutuhan pasar kerja global.</li><br>
                        <li>Menghasilkan tenaga kependidikan yang kompeten, profesional, religius, kreatif, mandiri, dan berjiwa pemimpin serta berkemampuan kewirausahaan.</li><br>
                        <li>Menyelenggarakan penelitian dan pengembangan ilmu untuk menghasilkan karya akademik yang unggul dan menjadi rujukan dalam bidang pendidikan teknologi informasi.</li><br>
                        <li>Menjalin kerjasama dengan dunia usaha/industri dan pendidikan dalam dan luar negeri untuk meningkatkan kualitas dan kinerja program studi pendidikan teknologi informasi.</li><br>
                        <li>Menjadikan program studi sebagai pusat pengembangan pendidikan teknologi informasi.</li><br>
                        <li>Memberdayakan alumni dalam rangka peningkatan peran dan citra program studi pendidikan teknologi informasi.</li><br>
                        <li>Membangun organisasi yang sehat berdasarkan prinsip otonomi, akuntabilitas, akreditasi dan evaluasi diri secara berkesinambungan.</li><br>
                    </ol>
                </div>
                <br><br><br>
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

<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartist -->
<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>


@endsection