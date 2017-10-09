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
       Sarana::create([
            'id' => '001',
            'nama' => 'Ruang Kuliah',
            'keterangan' => 'S1 Pendidikan Teknologi Informasi',
            'foto' => 'ruangkuliah1.jpg',
        ]);

        Sarana::create([
            'id' => '002',
            'nama' => 'Lab. RPL',
            'keterangan' => 'S1 Pendidikan Teknologi Informasi',
            'foto' => 'lab_rpl.jpg',
        ]);

        Sarana::create([
            'id' => '003',
            'nama' => 'Lab. Jaringan Komputer',
            'keterangan' => 'S1 Pendidikan Teknologi Informasi',
            'foto' => 'lab_jarkom.jpg',
        ]);

        Sarana::create([
            'id' => '004',
            'nama' => 'Lab. Multimedia Kreatif',
            'keterangan' => 'S1 Pendidikan Teknologi Informasi',
            'foto' => 'lab_mm.jpg',
        ]);

        Sarana::create([
            'id' => '005',
            'nama' => 'Ruang Baca',
            'keterangan' => 'S1 Pendidikan Teknologi Informasi',
            'foto' => 'ruangbaca.jpg',
        ]);
    }
}
