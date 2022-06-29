<?php
namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'alamat','no_telp','tanggal_lahir'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'no_telp' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required'
        ];
}