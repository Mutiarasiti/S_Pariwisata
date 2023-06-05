<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenishotel extends Model
{
    use HasFactory;
    protected $table = "jenishotel";
    protected $primaryKey = 'id';
    protected $fillable = ['id_hotel', 'jenis_hotel', 'deskripsi'];
}
