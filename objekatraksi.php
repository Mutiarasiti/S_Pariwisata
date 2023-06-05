<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objekatraksi extends Model
{
    use HasFactory;
    protected $table = "objekatraksi";
    protected $primaryKey = 'id';
    protected $fillable = ['id_tempatwisata', 'nama_objek', 'harga_masuk', 'deskripsi'];
}
