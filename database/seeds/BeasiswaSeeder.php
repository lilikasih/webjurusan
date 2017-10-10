<?php

use Illuminate\Database\Seeder;
use App\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beasiswa::create([
            'id' => '1',
            'nama' => 'BCA Finance 2017 (Beasiswa Peduli Anak Bangsa 2017)',
            'tgl' => '20/09/2017',
            'isi' => 'Beasiswa BCA Finance Peduli Tahun 2017 kembali ditawarkan oleh BCA Finance bagi mahasiswa yang sedang menempuh kuliah S1. Beasiswa ini terbuka bagi mahasiswa PTN dan PTS di seluruh Indonesia yang telah/sedang menyelesaikan semester 2.<br><br>
Beasiswa yang diberikan berupa bantuan dana pendidikan sejumlah Rp 3.000.000,- per semester. Kuota penerimaan beasiswa di tahun 2017 sejumlah 100 mahasiswa terpilih.<br><br>
Pendaftaran Beasiswa Periode 2017  : 20 Mei – 31 Juli 2017 <br><br>
Pengumuman Tahap I                 : 7 Agustus 2017<br>
Seleksi Tahap I                    : 8 Agustus – 31 Agustus 2017<br>
Pengumuman Akhir                   : 20 September 2017<br><br>
*Note : mohon diisi secara perlahan dan teliti. Kami TIDAK MENERIMA PERUBAHAN DATA apabila terjadi kesalahan (penulisan, pengisian, dll).<br><br>

<b><font color="blue">Keterangan :</font></b><br><br>

Tahap I     : Penentuan Awal<br>
200 Calon pemenang yang terpilih pada tahap awal wajib mengirimkan dokumen yang dipersyaratkan kemudian.<br>
Tahap II    : Penentuan Akhir<br>
Penentuan 100 pemenang beasiswa yang berhak menerima Rp 3.000.000 / semester.<br><br>

Proses seleksi dilakukan oleh Tim Seleksi BCA Finance<br><br>
Keputusan hasil penerimaan adalah bersifat mutlak dan tidak dapat diganggu gugat serta kami tidak menerima surat menyurat dalam bentuk apapun selama proses dan setelah keputusan pemenang<br>
Keterangan lebih lanjut dapat diakses melalui website <b><font color="red">www.bcafinance.co.id/beasiswa</font></b><br><br>

<b><font color="blue">Kualifikasi Penerima :</font></b><br><br>
- Mahasiswa Strata 1 (S1) atau D4 segala jurusan<br>
- Minimal telah/sedang menyelesaikan semester 2<br>
- IPK Minimal : 3,00 (PTN) dan 3,40 (PTS)<br>
- Tidak sedang menerima beasiswa dari pemberi beasiswa manapun<br><br><br>
<br><br><br>
Terima Kasih,<br><br>
Tim Beasiswa BCA Finance 2017',
            'foto' => 'bca.jpg',
        ]);

        Beasiswa::create([
            'id' => '2',
            'nama' => 'Pertukaran Mahasiswa ke Amerika Serikat Tahun 2018 oleh YSEALI',
            'tgl' => '10/06/2017',
            'isi' => 'Apakah kamu mahasiswa S1 atau merupakan fresh graduate yang baru lulus perkuliahan dalam 4 tahun terakhir? Ikuti tawaran pertukaran mahasiswa ke Amerika Serikat oleh Program YSEALI berikut. Melalui program YSEALI Academic Fellows, peserta akan diberikan kesempatan untuk mengikuti kuliah secara intensif pada salah satu universitas di USA selama lima minggu.<br><br>
Program YSEALI terdapat beberapa macamnya, namun khusus untuk pertukaran pelajar, anda dapat mengikuti YSEALI Academic Fellows Program dengan memilih perkuliahan diantaranya sebagai berikut : Civic Engagement, Environment Issues, serta Social Entrepreneurship and Economic Development.<br><br>
Selain memperdalam pemahaman tentang budaya Amerika Serikat, program YSEALI juga dimaksudkan untuk meningkatkan skill kepemimpinan bagi para penerima beasiswa. Adapun beberapa kegiatan yang termasuk dalam program ini seperti pengembangan skill kepemimpinan, studi tur pendidikan, kegiatan pelayanan masyarakat, serta kesempatan untuk menambah relasi dengan rekan-rekan di Amerika. Pada akhir progam, akan diadakan pertemuan bersama dengan para pembuat kebijakan, perwakilan pemerintah, dan pebisnis.<br><br>
<b><font color="blue">Persyaratan:</font></b><br><br>
1. Berusia antara 18 s/d 25 tahun pada saat pendaftaran.<br>
2. Merupakan warganegara dan penduduk tetap dari salah satu negara ASEAN berikut: Indonesia, Brunei Darussalam, Burma, Kamboja, Laos, Malaysia, Filipina, Singapura, Thailand, dan Vietnam.<br>
3. Merupakan mahasiswa S1 ATAU fresh graduate (lulus dalam 4 tahun terakhir).<br>
4. Mampu membaca, menulis, dan berbicara dalam Bahasa Inggris.<br>
5. Memenuhi persyaratan untuk mendapatkan visa J-1 Amerika Serikat.<br><br>

<b><font color="blue">Kriteria Seleksi:</font></b><br><br>
1. Memiliki kualitas kepemimpinan dan potensi yang kuat pada universitas, tempat kerja, dan/atau komunitas asal.<br>
2. Menunjukkan minat, pengetahuan, atau pengalaman profesional pada salah satu tema YSEALI.<br>
3. Menunjukkan komitmen atau ketertarikan pada layanan masyarakat, sukarelawan, atau mentorship.<br>
4. Menunjukkan minat yang serius dalam mempelajari Amerika Serikat dan kawasan ASEAN.<br>
5. Bersedia untuk berpartisipasi aktif pada program akademik intensif, layanan masyarakat, dan studi tur.<br>
6. Berkomitmen untuk kembali ke negara asal untuk mengaplikasikan skill kepemimpinan dan pelatihan sehingga dapat memberikan manfaat bagi masyarakat dan negara asal, serta kawasan ASEAN.<br>
7. Lebih diutamakan bagi mereka yang tidak pernah ke Amerika Serikat sebelumnya.<br><br>

<b><font color="blue">Tata Cara Pendaftaran:</font></b><br><br>
Untuk mendaftar program pertukaran mahasiswa dari YSEALI, anda dapat mengisi aplikasi online pada link berikut: Apply.<br><br>
Batas waktu pendaftaran sampai dengan 10 Oktober 2017. Hanya kandidat terpilih yang akan mendapatkan pemberitahuan untuk wawancara.<br><br>
Informasi lebih detail dapat menghubungi email: YSEALIjkt@state.gov atau mengunjungi website resminya: id.usembassy.gov. Selamat mencoba dan semoga bermanfaat.<br>
',
            'foto' => 'beasiswa2.jpg',
        ]);

        Beasiswa::create([
            'id' => '3',
            'nama' => 'Beasiswa Toyota Astra untuk Mahasiswa On-going',
            'tgl' => '10/06/2017',
            'isi' => 'Yayasan Toyota Astra (YTA) didirikan pada tahun 1974 oleh PT Astra International Tbk dan PT Toyota Astra Motor. Yayasan ini melakukan beberapa program dalam bidang pendidikan, diantaranya berupa beasiswa reguler untuk mahasiswa S1, beasiswa tesis / disertasi serta bantuan penelitian dan kegiatan ilmiah. Berikut informasi mengenai Beasiswa Toyota Astra.<br><br>
Penyelenggaraan beasiswa ini merupakan bentuk kepedulian nyata YTA terhadap dunia pendidikan nasional. Untuk tahun ini ditetapkan kuota sebesar 550 orang mahasiswa S1 dari 34 Perguruan Tinggi terpilih di seluruh Indonesia yang akan mendapatkan Beasiswa Toyota Astra sebesar Rp 250.000,- per bulan. Tujuan pemberian beasiswa ini dimaksudkan untuk membantu mahasiswa berprestasi agar dapat menyelesaikan studinya tepat waktu.<br><br>
<b><font color="blue">Persyaratan:</font></b><br><br>
1. Merupakan mahasiswa/i berkebangsaan Indonesia.<br><br>
2. Menekuni bidang studi Teknik (Jurusan Mesin, Elektro, Sipil, Arsitek, Kimia, Industri, Lingkungan dan Teknologi Informatika), MIPA, Pertanian, Perikanan dan Kehutanan.<br><br>
3. Tahun ajaran 2017/2018 berada di semester V atau VII.<br><br>
4. Memiliki IPK minimal 3,00.<br><br>
5. Belum bekerja tetap dan tidak sedang mendapatkan Beasiswa/Ikatan Dinas dari Lembaga atau Instansi lain.<br><br>
6. Permohonan diajukan secara kolektif melalui Pembantu Rektor Bidang Kemahasiswaan masing-masing perguruan tinggi paling lambat tanggal 30 September 2017 (cap pos).<br><br>
7. Apabila sampai batas waktu diatas, formulir permohonan belum diterima YTA, maka dengan sendirinya dinyatakan gugur.<br><br>
Keputusan nama-nama penerima beasiswa akan diumumkan Yayasan Toyota dan Astra melalui Pembantu Rektor Bidang Kemahasiswaan. Para penerima beasiswa yang terpilih wajib untuk melaporkan Indeks Prestasi setiap semester secara kolektif melalui Pembantu Rektor Bidang Kemahasiswaan sebagai bahan evaluasi Yayasan Toyota dan Astra.
       ',
            'foto' => 'beasiswa6.jpg',
        ]);

       Beasiswa::create([
            'id' => '4',
            'nama' => 'Beasiswa untuk Mahasiswa S1 dari Bazma Pertamina 2017',
            'tgl' => '10/06/2017',
            'isi' => 'Beasiswa untuk mahasiswa S1 yang dapat anda coba adalah tawaran dari Bazma Pertamina berikut ini. Program Beasiswa Bazma Pertamina merupakan sebuah program pemberian beasiswa kepada mahasiswa yang mempunyai semangat untuk terus tumbuh dan berkembang namun terbatas dalam hal ekonomi. Beasiswa yang diberikan selain berupa biaya pendidikan juga terdapat pendampingan untuk meningkatkan softskill masing-masing mahasiswa.<br><br>
Beasiswa Bazma Pertamina Tahun 2017 bermitra dengan 10 Perguruan Tinggi di Indonesia, meliputi:<br><br>
1. Universitas Indonesia (UI)<br>
2. Institut Pertanian Bogor (IPB)<br>
3. Universitas Negeri Jakarta (UNJ)<br>
4. Universitas Padjajaran (UNPAD)<br>
5. Politeknik Negeri Jakarta (PNJ)<br>
6. Universitas Pendidikan Indonesia (UPI)<br>
7. Universitas Islam Asy-Syafi’iyah (UIA)<br>
8. Universitas Indraprasta PGRI (UNINDRA)<br>
9. Sekolah Tinggi Ekonomi Islam SEBI (STEI SEBI)<br>
10. Institut Perguruan Tinggi Ilmu Al Quran (PTIQ) Jakarta<br><br>

Selain 10 Perguruan Tinggi diatas, Bazma Pertamina juga menawarkan program beasiswa aktivis pada mahasiswa Institut Teknologi Bandung (ITB) dan Universitas Ibn Khaldun Bogor (UIKA).<br><br>

Kelebihan mengikuti Beasiswa Bazma Pertamina adalah sebagai berikut:<br><br>
1. Mendapatkan penggantian biaya pendidikan dan bantuan biaya hidup<br>
2. Program pengembangan diri<br>
3. Dukungan untuk tugas akhir yang terseleksi<br>
4. Kesempatan menjadi sukarelawan di Yayasan Bazma Pertamina<br>
5. Pertemuan Tahunan Scholars Bazma Pertamina se-Indonesia<br><br>

<b><font color="blue">Persyaratan:</font></b><br><br>
1. Merupakan Warga Negara Indonesia dibuktikan dengan melampirkan KTP dan KK.<br>
2. Merupakan Mahasiswa Aktif Program S1 Reguler Semester 3 dan 5.<br>
* Khusus PNJ, beasiswa ditujukan bagi Mahasiswa Program D3 Reguler (Semester 3) dan D4 Reguler (Semester 3 dan 5).
3. Tidak sedang mendapatkan beasiswa dari Institusi/Lembaga lainnya dibuktikan dengan lampiran Surat Keterangan dari Kampus.<br>
4. Aktif dalam Organisasi Kampus/Luar Kampus dengan lampiran Surat Keterangan dari Organisasi yang menaunginya.<br>
5. Berasal dari keluarga yang membutuhkan dibuktikan dengan lampiran SKTM/Slip Gaji Orang Tua/Surat Keterangan Penghasilan Orang Tua.<br>
6. Bukan perokok aktif dengan lampirkan Surat Pernyataan Bermaterai 6000.<br>
7. Melampirkan CV Kreatif.<br>
8. Menulis esai dengan ketentuan sebagai berikut:<br>
a. Tema Esai: Inilah saya bagi keluarga dan kontribusi yang telah, sedang, dan akan saya berikan untuk Indonesia.<br>
b. Menulis esai ke dalam blog pribadi dengan panjang 500 s/d 750 kata dengan keyword (kata kunci) “Beasiswa Bazma Pertamina”. Tampilan blog tidak termasuk dalam penilaian.<br>
c. Masukkan link blog ke dalam formulir pendaftaran online.<br><br>

<b><font color="blue">Tata Cara Pendaftaran:</font></b><br><br>
Untuk mendaftar Beasiswa Bazma, anda dapat mendaftarkan diri secara online pada link berikut: <font color="red">http://scholarsbazma.id.</font><br><br>
Batas waktu pendaftaran sampai dengan <font color="red">7 Oktober 2017.</font> Isikan secara lengkap data-data yang dibutuhkan pada Form Pendaftaran Online dan unggah berkas yang diminta. Setelah menyelesaikan pendaftaran online, anda dapat mencetak tanda bukti pendaftaran. Seleksi yang dilaksanakan meliputi seleksi administrasi dan wawancara.
            ',
            'foto' => 'beasiswa4.jpg',
        ]);

        Beasiswa::create([
            'id' => '5',
            'nama' => 'Beasiswa S1 Kanada di University of Toronto Fully Funded Tahun 2018 – 2019',
            'tgl' => '09/10/2017',
            'isi' => 'Kanada merupakan salah satu negara maju di dunia dan kerap kali menjadi pilihan untuk melanjutkan kuliah di luar negeri oleh pelajar Indonesia. Salah satu universitas ternama di Kanada saat ini sedang menawarkan beasiswa untuk melanjutkan kuliah S1. University of Toronto yang meraih peringkat 31 di dunia (versi QS World University Rankings) menawarkan Lester B. Pearson International Scholarship Program bagi pelajar internasional, termasuk Indonesia. Program beasiswa S1 Kanada ini termasuk paling bergengsi dan kompetitif, setiap tahunnya ada sekitar 37 siswa yang akan mendapatkan beasiswa ini.<br><br>
Adapun cakupan pembiayaan yang ditawarkan meliputi: uang perkuliahan (tuition fee), buku, biaya insidental, serta bantuan tempat tinggal selama empat tahun. Beasiswa ini juga terbuka untuk berbagai jurusan, seperti: Akuntansi, Arsitektur, Bioengineering, Kimia, Teknik Sipil, dan berbagai jurusan lainnya.<br><br>
<b><font color="blue">Persyaratan:</font></b><br><br>
1. Merupakan pelajar internasional yang dinominasikan oleh sekolah asal. Pihak sekolah asal (SMA/SMK/sederajat) dapat mengisi Form Nominasi serta Data Sekolah pada link berikut: <font color="red">Nomination Form.</font><br>
2. Pemikir orisinal dan kreatif.<br>
3. Berkomitmen pada sekolah dan komunitas.<br>
4. Berprestasi dalam bidang akademik dan kreatif.<br>
5. Memiliki antusias tinggi dalam belajar dan eksplorasi intelektual.<br>
6. Menunjukkan kemampuan kepemimpinan yang kuat.<br>
7. Saat ini sedang menjalani tingkat terakhir (kelas 3 atau 12) Sekolah Menengah atau telah lulus tidak lebih awal dari Juni 2017.<br>
8. Mampu memulai perkuliahan pada tahun ajaran berikutnya (siswa yang telah mengikuti studi di universitas tidak dapat mengikuti beasiswa ini).<br><br>
  
<b><font color="blue">Tata Cara Pendaftaran:</font></b><br><br>            
Untuk mendaftar beasiswa S1 Kanada, anda harus mendapatkan nominasi dari sekolah asal (gunakan form di atas). Selanjutnya daftarkan diri anda sebagai mahasiswa di University of Toronto untuk tahun ajaran 2018.<br>
Pastikan anda telah memenuhi persyaratan masuk sebagai mahasiswa di University of Toronto (International Applicants). Pendaftaran untuk tahun 2018-2019 akan dibuka pada akhir September 2017.<br>
Setelah pihak panelis mendapatkan nominasi dan pendaftaran, anda dapat melengkapi Aplikasi Pendaftaran Online Lester B. Pearson Scholarship. Batas waktu pendaftaran beasiswa sampai dengan 15 Januari 2018. Batas waktu nominasi dari sekolah sampai dengan 30 November 2017.<br>
            ',
            'foto' => 'beasiswa5.jpg',
        ]);

        Beasiswa::create([
            'id' => '6',
            'nama' => 'Program Indonesia Next: Beasiswa Sertifikasi Internasional untuk Mahasiswa/i Indonesia',
            'tgl' => '10/06/2017',
            'isi' => 'Bagi kamu mahasiswa Indonesia, ada program menarik yang ditawarkan oleh Telkomsel yang bisa kamu ikuti. Program Indonesia Next, merupakan program dari Telkomsel bagi mahasiswa/i Indonesia dalam bentuk seminar, diskusi panel dan sharing session, serta kesempatan untuk mendapatkan sertifikasi internasional. Beasiswa sertifikasi yang akan diberikan adalah keahlian Microsoft Office Specialist dan Adobe Certified Associate.<br><br>
Melalui program ini, peserta akan mendapatkan wawasan mengenai pentingnya memiliki sertifikat keahlian yang dapat membantu dalam menghadapi kompetisi di dunia saat ini. Peserta akan mendapatkan kesempatan untuk mengikuti ujian sertifikasi Nasional dan Internasional secara cuma–cuma. Untuk yang berhasil lulus ujian sertifikasi, peserta akan mendapatkan sertifikat keahlian skala internasional yang bisa digunakan sebagai Surat Keterangan Pendamping Ijazah (SKPI).<br><br>

<b><font color="blue">Siapa saja yang dapat mengikuti program ini?</font></b><br>
Pendaftaran terbuka untuk semua mahasiswa aktif terutama bagi mahasiswa semester akhir.<br><br>

<b><font color="blue">Kapan Indonesia Next dilaksanakan?</font></b><br>
Indonesia Next akan dilaksanakan pada bulan Oktober s/d Desember pada 6 kota, yaitu: Medan, Yogyakarta, Jakarta, Surabaya, Makassar, dan Bandung.<br><br>

Berikut beberapa nama yang akan menjadi pembicara dalam seminar Indonesia Next:<br>
1. Irwan Dewanto (Head of HR Supply Chain Unilever)<br>
2. Harry Nugraha (Country Manager Intel Indonesia)<br>
3. Zeddy Iskandar (Senior IT Specialist Mubadala Petroleum Abu Dhabi)<br>
4. Handry Satriago (CEO GE Indonesia)<br>
5. dan sebagainya.<br><br>

<b><font color="blue">Persyaratan dan Ketentuan:</font></b><br><br>
1. Pendaftaran terbuka untuk semua mahasiswa aktif (D1, D2, D3, D4, S1, dan S2) terutama untuk mahasiswa semester akhir.<br>
2. Registrasi melalui website <font color="red">indonesianext.id.</font> atau aplikasi mobile Indonesia Next (Google Play).<br>
3. Peserta harus mendaftarkan alamat email dan nomor telepon (Halo, simPATI, Loop, As) yang valid dan bisa dihubungi. Peserta lulus penilaian dengan nilai kelulusan minimal.<br>
4. Peserta Login and melakukan Assessment Test, hanya peserta terpilih (berdasarkan Score dan Waktu terbaik) yang akan diundang ke Seminar dan mengikuti kegiatan Indonesia Next.<br>
5. Peserta bersedia mengikuti seluruh rangkaian kegiatan mulai dari Seminar, Training, Exam, Bootcamp, QPanel sesuai jadwal yang ditetapkan panitia.<br>
6. Semua informasi mengenai kegiatan akan diinformasikan melalui email dan sms, jadi selalu cek email secara berkala. Jika panitia membutuhkan data dari peserta dan peserta tidak bisa dihubungi selama 4 jam pada hari tersebut, peserta dianggap mengundurkan diri dari kegiatan.<br>
7. Semua materi yang dikirimkan oleh peserta menjadi milik Indonesia Next.<br>
8. Keputusan panitia mutlak dan tidak dapat diganggu gugat.<br><br>

Informasi lebih detail silakan mengunjungi website resminya: <font color="red">indonesianext.id.</font> Selamat mencoba dan semoga bermanfaat.
',
            'foto' => 'beasiswa3.jpg',
        ]);

    }
}