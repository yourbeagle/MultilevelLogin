<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $pegawai = [
            [
                'nama' => 'Wahyu Bambang Sugiono',
                'jenis_kelamin' => 'Laki - Laki',
                'alamat' => 'Jl. Adoh Banget - Malang',
            ],
            [
                'nama' => 'Agus Joko Bambang',
                'jenis_kelamin' => 'Laki - Laki',
                'alamat' => 'Jl. Cidek Banget - Malang',
            ]
        ];
        $this->db->table('Pegawai')->insertBatch($pegawai);
    }
}
