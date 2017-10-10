@extends('layouts.navbar')

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
                            <img src="{{asset('images/foto.jpg')}}"  width="100%" height="auto" alt="">
                        </div>

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">

                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title" >S1 Teknik Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="informatika"><i class="mdi-hardware-keyboard-arrow-up"></i>Selengkapnya...</a></p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title" ></i>S1 Sistem Informasi</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="sisteminfo"><i class="mdi-hardware-keyboard-arrow-up"></i>Selengkapnya...</a></p>
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
                                        <p class="card-stats-compare"><a href="pendidikan"><i class="mdi-hardware-keyboard-arrow-up"></i>Selengkapnya...</a></p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"></i>D3 Manaj. Informatika</p>
                                        <h4 class="card-stats-number">Akreditasi A</h4>
                                        <p class="card-stats-compare"><a href="manajemen"><i class="mdi-hardware-keyboard-arrow-up"></i>Selengkapnya...</a></p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <div id="card-widgets">
                       <div class="row">

                           <?php
                           $i=0;
                           ?>

                           @foreach($ketberita as $berita)
                               <?php
                               $i++;
                               ?>

                            <div class="col s12 m12 l4">
                                <div class="blog-card" >
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <a href="{{url('berita',[$berita->id])}}"><img src="images/{{$berita->foto}}" alt="blog-img" width="100px" height="190px"></a>
                                    </div>
                                    <div class="card-content">
                                        <p class="row">
                                          <span class="left">{{$berita->tgl}}</span>
                                        </p>
                                        <h4 class="card-title grey-text text-darken-4"><a href="{{url('berita',[$berita->id])}}" class="grey-text text-darken-4">{{$berita->judul}}</a>
                                        </h4>                                        
                                        <div class="row">
                                          <div class="col s9"> by Brain Informatika</div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                                   <?php
                                   if ($i%3==0){
                                      ?> <hr><br> <?php
                                   }
                                   ?>
                            @endforeach
                       </div>
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