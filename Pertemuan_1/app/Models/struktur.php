<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class struktur extends Model
{
    protected $table = 'struktur';
    protected $fillable = ['tanggal', 'gambar'];

    // Tambahkan ini biar tidak error updated_at / created_at
    public $timestamps = false;
}
