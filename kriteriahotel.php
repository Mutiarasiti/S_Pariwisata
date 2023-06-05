<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteriahotel extends Model
{
    protected $table = "kriteriahotel";
    protected $primaryKey = 'id';
    protected $fillable = ['id_hotel', 'jenis_hotel', 'komentar'];
}
