<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    protected $table = "penilaian";
    protected $primaryKey = 'id';
    protected $fillable = ['id_hotel', 'id_tempatwisata', 'komentar', 'alamat',  'tgl_penilaian'];
}
