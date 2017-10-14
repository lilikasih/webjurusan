@extends('layouts.navbar')

@section('isi')

        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">

                <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper">

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

                        <p class="caption">Galeri Kegiatan Jurusan Teknik Informatika Universitas Negeri Surabaya</p>
                        <div class="divider"></div>

                       {{-- <div class="row">

                            <div class="masonry-gallery-wrapper">

                                <div class="popup-gallery">
                                <div class="col s12 m3 grid">
                                    @foreach ($listgaleri as $galeri)
                                    <figure class="effect-lily">
                                       <a href="images/Galeri/{{$galeri->foto}}" title="{{$galeri->nama}}"><img src="images/Galeri/{{$galeri->foto}}" width="260px" height="180px">
                                    </figure>
                                    @endforeach
                                </div>
                                </div>

                            </div>
                        </div>--}}

                        <div class="masonry-gallery-wrapper">
                            <div class="popup-gallery">
                                <div class="col s12 m3 grid">
                                <div class="gallary-sizer"></div>

                                <div class="gallary-item" >
                                @foreach ($listgaleri as $galeri)
                                <a href="images/Galeri/{{$galeri->foto}}" title="{{$galeri->nama}}"><img src="images/Galeri/{{$galeri->foto}}" width="220px" height="160px"></a>
                                @endforeach
                                </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
        </div>
        <!-- END WRAPPER -->


    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('js/plugins/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}></script>
    <!--prism-->
    <script type="text/javascript" src="{{asset('js/plugins/prism/prism.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{asset('js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!-- masonry -->
    <script src="{{asset('js/plugins/masonry.pkgd.min.js')}}"></script>
    <!-- imagesloaded -->
    <script src="{{asset('js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('js/plugins.min.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>



@endsection