<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $table = "hotel";
    protected $primaryKey = 'id';
    protected $fillable = ['id_hotel', 'id_jenishotel', 'nama_hotel', 'alamat',  'jumlah_kamar',  'harga'];
}
