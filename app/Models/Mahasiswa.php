<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas"; //Eloquent akan membuat model mahasiswa record di tabel mahasiswa
    protected $primaryKey = 'nim'; //Memanggil isi DB dengan primaryKey
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'prodi',
        'jurusan',
        'no_handphone',
    ];
}
