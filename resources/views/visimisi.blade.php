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
                <h4 class="breadcrumbs-title">Visi & Misi</h4>
                <ol class="breadcrumbs">
                    <li><a href="beranda">Beranda</a></li>
                    <li class="=active">Sejarah</li>
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
                        <p>Unggul dalam Pendidikan dan Teknologi Informasi.</p>
                     </div>
                    <div class="section">
                        <p class="caption">Misi</p>
                        <div class="divider"></div><br>
                        <ol>
                            <li> Menyelenggarakan manajemen jurusan yang kredibel, akuntabel dan transparan sesuai standar penjaminan mutu.</li>
                            <li> Menghasilkan lulusan yang berkompeten dan berkarakter.</li>
                            <li> Meningkatkan kualitas sumber daya manusia di bidang keilmuan pendidikan dan teknologi informasi.</li>
                            <li> Menyelenggarakan pendididikan yang inovatif di bidang teknologi informasi.</li>
                            <li> Menyediakan sarana dan prasarana dalam pengembangan pendidikan dan teknologi informasi.</li>
                            <li> Melaksanakan penelitian, penerapan IPTEK bagi masyarakat dan menjalin kerjasama yang berkelanjutan dengan berbagai instansi dan dunia industri.
                            </li>
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

@endsection