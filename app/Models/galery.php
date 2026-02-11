<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galery';
    protected $primaryKey = 'id_galery';
    public $timestamps = false;

    protected $fillable = [
        'gambar', 'deskripsi', 'tanggal'
    ];
}
