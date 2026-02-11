<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // Nama tabel
    protected $table = 'berita';

    // Primary key
    protected $primaryKey = 'id_berita';

    // Kalau primary key auto increment (INT AUTO_INCREMENT)
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak pakai kolom created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
    ];
}
