<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiFakerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for($i = 0; $i < 50; $i++){
            $jk = $faker->randomElement(['laki-laki', 'perempuan']);
            if ($jk == 'laki-laki'){
                $gender = 'male';
            }else{
                $gender = 'female';
            }
            $data = [
                'nama' => $faker->name($gender),
                'jenis_kelamin' => $jk,
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date('Y-m-d', 'now'),
                'no_telp' => $faker->phoneNumber,
            ];
            $this->db->table('Pegawai')->insert($data);
        }
    }
}
