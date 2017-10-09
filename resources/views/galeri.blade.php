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
                                <h5 class="breadcrumbs-title">Galeri</h5>
                                <ol class="breadcrumbs">
                                    <li><a href="beranda">Beranda</a></li>
                                    <li class="active">Galeri</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs end-->

                <!--start container-->
                <div class="container">
                    <div class="section">

                        <p class="caption">Galeri Jurusan Teknik Informatika Universitas Negeri Surabaya</p>
                        <div class="divider"></div>

                        <div class="masonry-gallery-wrapper">
                            <div class="popup-gallery">
                                <div class="gallary-sizer"></div>
                                <div class="gallary-item"><a href="images/gallary/1.jpg" title="The Cleaner"><img src="images/gallary/1.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/2.jpg" title="Winter Dance"><img src="images/gallary/2.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/3.jpg" title="The Uninvited Guest"><img src="images/gallary/3.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/4.jpg" title="Oh no, not again!"><img src="images/gallary/4.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/5.jpg" title="Swan Lake"><img src="images/gallary/5.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/6.jpg" title="The Shake"><img src="images/gallary/6.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/7.jpg" title="Who's that, mommy?"><img src="images/gallary/7.jpg"></a></div>
                                <div class="gallary-item"><a href="images/gallary/8.jpg" title="Who's that, mommy?"><img src="images/gallary/8.jpg"></a></div>
                                <div class="gallary-item"><a href="images/a1teknik.jpg" title="ENAK DEK"><img src="images/a1teknik.jpg"></a></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
        </div>
        <!-- END WRAPPER -->


    <!-- ================================================
    Scripts
    ================================================ -->

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

    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>



@endsection