<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_dosen', 'nama_dosen', 'nip_nik', 'nidn', 'jabatan', 'email', 'hp_wa', 'alamat'
    ];
    protected $table = 'dosen';
    public $timestamps = false;
}