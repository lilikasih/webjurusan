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
                            <h5 class="breadcrumbs-title">Info Beasiswa</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">Info Beasiswa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            <div class="container">
                <center><h1>{{$Beasiswa->nama}}</h1></center>

                <!--chart dashboard start-->
                <div id="chart-dashboard">

                    <center><img src="images/{{$Beasiswa->foto}}" style="object-fit:cover"  width="700" height="600"></center>
                    <p style="text-align: justify">{!!$Beasiswa->isi!!}</p>
                </div>
            </div>
                <!--end container-->
        </section>
        <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset ('js/plugins/jquery-1.11.2.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset ('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ asset ('js/plugins/chartist-js/chartist.min.js')}}"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="{{ asset ('js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('js/plugins/chartjs/chart-script.js')}}"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="{{ asset ('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('js/plugins/sparkline/sparkline-script.js')}}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset ('js/plugins.min.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset ('js/custom-script.js')}}"></script>


@endsection