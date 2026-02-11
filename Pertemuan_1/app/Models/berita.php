<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita'; // sesuaikan jika primary key bukan 'id'
    public $timestamps = false; // karena kamu pakai field tanggal sendiri

    protected $fillable = [
        'judul', 'isi', 'gambar', 'tanggal'
    ];
}
