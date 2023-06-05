<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanan";
    protected $primaryKey = 'id';
    protected $fillable = ['id_objek_atraksi', 'nama', 'alamat', 'tgl_pemesanan'];
}
