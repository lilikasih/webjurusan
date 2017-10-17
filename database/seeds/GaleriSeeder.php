<?php

use Illuminate\Database\Seeder;
use App\Galeri;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        galeri::create([
            'id' => '0000000001',
            'nama' => 'Gedung Teknik Informatika',
            'tanggal' => '14/10/2017',
            'foto' => 'a1teknik.jpg',
        ]);

        galeri::create([
            'id' => '0000000002',
            'nama' => 'Penampilan Tiwul dari FBS saat XProject 1.0',
            'tanggal' => '22/12/2015',
            'foto' => 'Tiwul-FBS.jpg',
        ]);

        galeri::create([
            'id' => '0000000003',
            'nama' => 'Suasana Nonton Bareng di XProject 1.0',
            'tanggal' => '22/12/2015',
            'foto' => 'Nobar.jpg',
        ]);

        galeri::create([
            'id' => '0000000004',
            'nama' => 'Juri Informatics Champions 2k16',
            'tanggal' => '27/11/2016',
            'foto' => 'juri-IC.jpg',
        ]);

        galeri::create([
            'id' => '0000000005',
            'nama' => 'Pemenang Informatics Champions 2k16',
            'tanggal' => '27/11/2016',
            'foto' => 'pemenang-IC.jpg',
        ]);

        galeri::create([
            'id' => '0000000006',
            'nama' => 'Panitia Informatics Champions 2k16',
            'tanggal' => '27/11/2016',
            'foto' => 'Panitia-IC.jpg',
        ]);

        galeri::create([
            'id' => '0000000007',
            'nama' => 'Foto Bersama Teknik Informatika UPN dan UNESA ',
            'tanggal' => '29/10/2016',
            'foto' => 'UPN.JPG',
        ]);

        galeri::create([
        'id' => '0000000008',
        'nama' => 'Wisudawan dan Wisudawati Jurusan Teknik Informatika',
        'tanggal' => '27/07/2017',
        'foto' => 'wisuda.jpg',
    ]);
    }
}
