@extends('layouts.navbar')

@section('isi')

    <div class="wrapper">

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Struktur Organisasi</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">Struktur Organisasi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            <!--start container-->
            <div class="container">
                <h1>Struktur Organisasi Jurusan Teknik Informatika</h1>
                <div id="invoice">
                    <div class="invoice-header">
                        <div class="row section">
                            <div class="materialboxed">
                                <img src="images/struktur.jpg"  width="100%" height="auto" alt="sample">
                            </div>
                        </div>
                    </div>
                </div>
                <!--start container-->
                <div class="container">
                    <div class="section">
                        <br><br><br>
                    </div>
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