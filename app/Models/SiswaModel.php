<?php namespace App\Models;
use CodeIgniter\Model;
 
class SiswaModel extends Model
{
     
    public function getSiswa()
    {
         return $this->db->table('siswa')
         ->join('kelas','kelas.idKelas=siswa.idKelas')
         ->join('jurusan', 'jurusan.idJurusan=siswa.idJurusan')->orderby('namaSiswa asc') 
         ->get()->getResult();  
    }
 }