<?php

use Illuminate\Database\Seeder;
use App\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'id' => '196004041987011001',
            'nama' => 'Prof. Dr. Ekohariadi, M.Pd',
            'prodi' => 'S1 Pendidikan Teknologi Informasi',
        ]);
        Dosen::create([
            'id' => '196105151986012001',
            'nama' => 'Dr. Meini Sondang Sumbawati, M.Pd.',
            'prodi' => 'S1 Pendidikan Teknologi Informasi',
        ]);
        Dosen::create([
            'id' => '196505191992021001',
            'nama' => 'Drs. Bambang Sujatmiko, M.T.',
            'prodi' => 'D3 Manajemen Informatika',
        ]);
        Dosen::create([
            'id' => '196812171994032002',
            'nama' => 'Rina Harimurti, S.Pd.,MT',
            'prodi' => 'D3 Manajemen Informatika',
        ]);
        Dosen::create([
            'id' => '197411012003121001',
            'nama' => 'Aditya Prapanca, ST. M.Kom',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '197702032005012001',
            'nama' => 'Wiyli Yustanti, S.Si. M.Kom',
            'prodi' => 'D3 Manajemen Informatika',
        ]);

        Dosen::create([
            'id' => '197506022003122001',
            'nama' => 'Yuni Yamasari, S.Kom., M.Kom',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '197512032005012001',
            'nama' => 'Naim Rochmawati ,S.Kom. MT.',
            'prodi' => 'D3 Manajemen Informatika',
        ]);

        Dosen::create([
            'id' => '197908062006041001',
            'nama' => 'Agus Prihanto, ST. M.Kom',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '197303302006041001',
            'nama' => 'Ari Kurniawan, S.Kom.,MT',
            'prodi' => 'S1 Sistem Informasi',
        ]);

        Dosen::create([
            'id' => '197912062008011011',
            'nama' => 'Dedy Rahman Prehanto. S.Kom M.Kom',
            'prodi' => 'S1 Sistem Informasi',
        ]);

        Dosen::create([
            'id' => '197701102008121003',
            'nama' => 'Asmunin , S.Kom.',
            'prodi' => 'D3 Manajemen Informatika',
        ]);

        Dosen::create([
            'id' => '197810272008121002',
            'nama' => 'Andi Iwan Nurhidayat, S.Kom.,M.T.',
            'prodi' => 'D3 Manajemen Informatika',
        ]);

        Dosen::create([
            'id' => '198003252008121001',
            'nama' => 'I Gusti Lanang P.E.P., S.Kom., M.Kom.',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '198211022008121001',
            'nama' => 'Salamun Rohman Nudin, S.Kom.,M.Kom.',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '197912202008121001',
            'nama' => 'Dwi Fatrianto Suyatno ,S.Kom.,M.Kom.',
            'prodi' => 'S1 Sistem Informasi',
        ]);

        Dosen::create([
            'id' => '198102212008122001',
            'nama' => 'Ardhini Warih Utami, S.Kom., M.Kom',
            'prodi' => 'S1 Sistem Informasi',
        ]);

        Dosen::create([
            'id' => '198104142009121004',
            'nama' => 'I Kadek Dwi Nuryana,S.T.,M.Kom.',
            'prodi' => 'S1 Sistem Informasi',
        ]);

        Dosen::create([
            'id' => '197905082009121001',
            'nama' => 'Setya Chendra Wibawa, S.Pd, MT',
            'prodi' => 'S1 Pendidikan Teknologi Informasi',
        ]);

        Dosen::create([
            'id' => '198104142009121064',
            'nama' => 'Ricky Eka Putra, S.Kom. M.Kom',
            'prodi' => 'S1 Teknik Informatika',
        ]);

        Dosen::create([
            'id' => '198104142004121004',
            'nama' => 'Yeni Anistyasari, S.Pd. M.Kom',
            'prodi' => 'S1 Pendidikan Teknologi Informasi',
        ]);

        Dosen::create([
            'id' => '198106142009121004',
            'nama' => 'Ibnu Febry Kurniawan, S.Kom, M.Sc',
            'prodi' => 'S1 Pendidikan Teknologi Informasi',
        ]);

    }
}
