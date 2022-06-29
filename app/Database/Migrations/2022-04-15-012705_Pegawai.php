<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pegawai' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tanggal_lahir' => [
                'type'           => 'DATE'
            ],
        ]);
        $this->forge->addPrimaryKey('id_pegawai');
        $this->forge->createTable('Pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('Pegawai');
    }
}
