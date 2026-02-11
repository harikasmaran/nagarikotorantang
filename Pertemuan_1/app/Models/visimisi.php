<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $table = 'visimisi';
    protected $primaryKey = 'id_vm';
    public $timestamps = false;
    protected $fillable = ['visi', 'misi','tanggal'];
}


