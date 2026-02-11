<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    public $timestamps = false;

    protected $fillable = ['laki_laki', 'perempuan'];
}

