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
                            <h5 class="breadcrumbs-title">Informasi Beasiswa</h5>
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                                <li class="active">Info Beasiswa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">
                    <!-- start blog list -->
                    <div id="blog-posts" class="row">
                    @foreach($listbeasiswa as $Beasiswa)

                        <div class="col s12 m6 l1">
                        <div class="blog-sizer"></div>

                        <div class="blog">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                <br><center><span class="left"><a href="{{url('infobeasiswa',[$Beasiswa->id])}}">{{$Beasiswa->nama}}</a></span><br><br><br></center>
                                <a href="{{url('infobeasiswa',[$Beasiswa->id])}}"><img src="images/{{$Beasiswa->foto}}" width="300" height="200"></a><br>
                                </div>
                                <div class="card-content">
                                    <p class="row">
                                        <span class="right">{{$Beasiswa->tgl}}</span><br><br>
                                    </p>
                                    <p class="blog-post-content" style="max-height:100px; text-align: justify">{!!$Beasiswa->isi!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

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

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
        /*
         * Masonry container for blog page
         */
        var $containerBlog = $("#blog-posts");
        $containerBlog.imagesLoaded(function() {
            $containerBlog.masonry({
                itemSelector: ".blog",
                columnWidth: ".blog-sizer",
            });
        });
    </script>

    @endsection