<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikans';
    protected $primaryKey = 'id_pendidikan';
    protected $fillable = ['nama_institusi', 'jenjang', 'jurusan', 'tahun_masuk', 'tahun_lulus'];

    // public function karyawans()
    // {
    //     return $this->hasMany(Karyawan::class, 'id_karyawan');
    // }
}
