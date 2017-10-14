<?php

use Illuminate\Database\Seeder;
use App\Sarana;

class SaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       sarana::create([
            'id' => '001',
            'nama' => 'Ruang Kuliah',
            'keterangan' => '',
            'foto' => 'ruangkuliah1.jpg',
        ]);

        sarana::create([
            'id' => '002',
            'nama' => 'Lab. RPL',
            'keterangan' => '<b>Laboratorium yang Digunakan untuk Melayani Praktikum Beberapa Mata Kuliah :</b><br><br>
            <u><b>Prodi D3 Manajemen Informatika</b></u><br><br>
                            Algoritma dan Pemrograman<br>
                            Pemrograman Struktur Data<br>
                            Pemrograman Berorientasi Objek<br>
                            Pemrograman Web 1<br>
                            Pemrograman Web 2<br>
                            Pemrograman Visual 1<br>
                            Pemrograman Visual 2<br>
                            Mobile Programming<br><br>
            <u><b>Dasar-dasar pemrograman</b></u><br><br>
                            Struktur Data<br>
                            Pemrograman Berbasis Objek<br>
                            Rekayasa Perangkat Lunak<br>
                            Teknik Komputasi<br>
                            Kecerdasan Buatan<br>
                            Mobile Programming<br>
                            Pemrograman Game<br>
            ',
            'foto' => 'lab_rpl.jpg',
        ]);

        sarana::create([
            'id' => '003',
            'nama' => 'Lab. Jaringan Komputer',
            'keterangan' => '<b>Laboratorium yang Digunakan untuk Melayani Praktikum Beberapa Mata Kuliah :</b><br><br>
            <u><b>Prodi D3 Manajemen Informatika</b></u><br><br>
                            Algoritma dan Pemrograman<br>
                            Pemrograman Struktur Data<br>
                            Pemrograman Berorientasi Objek<br>
                            Pemrograman Web 1<br>
                            Pemrograman Web 2<br>
                            Pemrograman Visual 1<br>
                            Pemrograman Visual 2<br>
                            Mobile Programming<br><br>
            <u><b>Dasar-dasar pemrograman</b></u><br><br>
                            Struktur Data<br>
                            Pemrograman Berbasis Objek<br>
                            Rekayasa Perangkat Lunak<br>
                            Teknik Komputasi<br>
                            Kecerdasan Buatan<br>
                            Mobile Programming<br>
                            Pemrograman Game<br>
            ',
            'foto' => 'lab_jarkom.jpg',
        ]);

        sarana::create([
            'id' => '004',
            'nama' => 'Lab. Multimedia Kreatif',
            'keterangan' => '<b>Laboratorium yang Digunakan untuk Melayani Praktikum Beberapa Mata Kuliah :</b><br><br>
            <u><b>Prodi S1 Pendidikan Teknologi Informasi</b></u><br><br>
                            Teknik Audio Visual<br>
                            E-Learning<br>
                            Teknik Animasi<br>
            ',
            'foto' => 'lab_mm.jpg',
        ]);

        sarana::create([
            'id' => '005',
            'nama' => 'Ruang Baca',
            'keterangan' => '',
            'foto' => 'ruangbaca.jpg',
        ]);
    }
}
