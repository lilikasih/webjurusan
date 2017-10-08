@extends('layout.navbar')

@section('isi')

        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">

                            <h2 class="judul" style="text-align:center">Selamat Datang</h2>
                            <h1 class="judul" style="text-align:center">di Jurusan Teknik Informatika Universitas Negeri Surabaya</h1>
                        <div class="responsive-img">
                            <img src="images/foto.jpg"  width="100%" height="auto" alt="">
                        </div>

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">

                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"></i>S1 Teknik Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="informatika"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"></i>S1 Sistem Informasi</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="sisteminfo"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"></i>S1 Pend. T. Informasi</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="pendidikan"><i class="mdi-hardware-keyboard-arrow-up"></a></i>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"></i>D3 Manajemen Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="manajemen"><i class="mdi-hardware-keyboard-arrow-up"></i></a>Selengkapnya...
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                       <div class="row">
                            <!-- blog card -->
                            <div class="col s12 m12 l4">
                                <div class="blog-card" >
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <a href="porjur"><img src="images/porjur.jpg" alt="blog-img"></a>
                                    </div>
                                    <div class="card-content">
                                        <p class="row">
                                          <span class="left"><a href="porjur">Porjur</a></span>
                                          <span class="right">15 Juni 2016</span>
                                        </p>
                                        <h4 class="card-title grey-text text-darken-4"><a href="porjur" class="grey-text text-darken-4">Pekan Olahraga Jurusan: Junjung Tinggi Sportivitas, Terapkan Solidaritas</a>
                                        </h4>                                        
                                        <div class="row">
                                          <div class="col s9"> By <a>Brain Informatika</a></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                           <div class="col s12 m12 l4">
                               <div class="blog-card" >
                                   <div class="card">
                                       <div class="card-image waves-effect waves-block waves-light">
                                           <img src="images/IC.jpg" alt="blog-img">
                                       </div>
                                       <div class="card-content">
                                           <p class="row">
                                               <span class="left"><a href="">Informatics Champion</a></span>
                                               <span class="right">03 November 2016</span>
                                           </p>
                                           <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Mengasah Bakat Teknologi Melalui Informatics Champion</a>
                                           </h4>
                                           <div class="row">
                                               <div class="col s9"> By <a href="#">Brain Informatika</a></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="col s12 m12 l4">
                               <div class="blog-card" >
                                   <div class="card">
                                       <div class="card-image waves-effect waves-block waves-light">
                                           <img src="images/dialogjurusan.jpg" alt="blog-img">
                                       </div>
                                       <div class="card-content">
                                           <p class="row">
                                               <span class="left"><a href="">Dialog Jurusan</a></span>
                                               <span class="right">25 Mei 2016</span>
                                           </p>
                                           <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Mewadahi Aspirasi Mahasiswa Melalui Dialog Jurusan</a>
                                           </h4>
                                           <div class="row">
                                               <div class="col s9"> By <a href="#">Brain Informatika</a></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                    </div>
                        <br><br><br>
                    <!--card widgets end-->
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
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hello. Welcome to the Informatics Website</span>', 1500);
        }, 1500);

    });
    </script>

    @endsection