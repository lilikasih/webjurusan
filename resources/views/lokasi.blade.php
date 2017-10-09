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
                <h5 class="breadcrumbs-title">Peta Lokasi</h5>
                <ol class="breadcrumbs">
                    <li><a href="beranda">Beranda</a></li>
                    <li class="active">Peta Lokasi</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">
            <p class="caption">Lokasi Gedung Jurusan Teknik Informatika Universitas Negeri Surabaya.</p>
            <div class="divider"></div>
            <div id="contact-page" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63318.84930859899!2d112.64724566726224!3d-7.305709346349906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7aeda56d81%3A0x992dbb65f460fdf!2sGedung+Informatika+UNESA!5e0!3m2!1sid!2sid!4v1506433239420"
                            width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
              <br><br><br>
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