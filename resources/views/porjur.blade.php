@extends('layout.navbar')

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
                            <ol class="breadcrumbs">
                                <li><a href="beranda">Beranda</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">
                    <h5>Pekan Olahraga Jurusan : Junjung Tinggi Sportivitas, Terapkan Solidaritas</h5>
                    <div class="divider"></div><br>
                </div>
                <img src="images/porjur1.jpg" width="1000" height="600">
                <p style="text-align: justify">
                    Jurusan teknik informatika adalah jurusan baru yang ada di Universitas Negeri Surabaya.
                    Meskipun jurusan baru, namun kekeluargaan dan kekompokkan teknik informatika sudah terbukti melalui kegiatan pekan olahraga jurusan.
                    Kegiatan ini merupakan kegiatan pertama yang diadakan teknik informatika.
                    Dengan semangat yang baru dengan jargon ‘Viva La Himti’, acara ini berjalan dengan sukses.
                    Bagaimana keseruan pekan olahraga jurusan atau biasa disebut Porjur ini?
                    Acara PORJUR TIF 2015 yang bertempat di Kebraon Sport Center (KSC).
                    Di ikuti oleh 15 tim, yang terdiri dari seluruh kelas dari angkatan 2013 sampai 2015.
                    Khusus untuk angkatan 2012 bergabung menjadi hanya satu tim dikarenakan kesibukan untuk menyelesaikan tugas akhir.<br><br>
                    Acara ini berlangsung pada hari jum’at 13 November 2015 yang merupakan babak penyisihan, serta untuk hari minggu 15 November 2015 yang merupakan babak Semifinal dan Final.
                    Supporter, mempunyai cara sendiri untuk mendukung TIMnya dengan cara bersorak-sorak. Mulai dari meneriakkan jargon, yel-yel, sampai menjerit sekeras-kerasnya.
                    Hal tersebut dirasa cukup untuk membakar semangat para pemain yang sedang bertanding. Bukan hanya supporter, seluruh panitia pun ikut tegang saat menonton kompetisi tersebut.
                    “semoga dengan kegiatan porjur ini, dapat meningkatkan rasa kekeluargaan seluruh angkatan yang ada di jurusan teknik informatika” ujar Jefri selaku ketua pelaksana porjur 2015.<br><br>
                    Babak final berlangsung sangat seru. Para pemain dan suppoter berjuang sekuat tenaga agar dapat memenangkan kompetisi ini dan dapat membanggakan kelasnya.
                    Dan akhirnya porjur pada tahun ini dimenangkan oleh tim SI 15 dengan kapten Dicky. Dan sebagai runner up nya adalah tim 2012.<br><br>
                    “Untuk porjur tahun depan. SI akan menjadikan momen juara tahun ini untuk mempertahankan juara.
                    Bila gagal memenangkan juara, kami mencoba memenangkan hati supporter kami karena menurut saya itu sudah termasuk meraih juara dan harapannya tidak lagi ada miskomunikasi ”
                    ujar Dicky Kapten Futsal SI 2015
                </p>
                <br><br>
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
<!--prism
<script type="text/javascript" src="js/prism/prism.js"></script>-->
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartist -->
<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>

@endsection