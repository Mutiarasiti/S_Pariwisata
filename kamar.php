<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $table = "kamar";
    protected $primaryKey ='id';
    protected $fillable = ['id_hotel', 'tipe_kamar', 'no_kamar', 'nama_kamar', 'jumlah_kamar'];
}
