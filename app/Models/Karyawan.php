<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['id_admin','id_pendidikan','nama','nama_institusi','nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'no_hp', 'email'];
    
    public function admin()
    {
    return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
    
    public function pendidikan()
    {
    return $this->belongsTo(Pendidikan::class, 'id_pendidikan', 'id_pendidikan');
    }

}


