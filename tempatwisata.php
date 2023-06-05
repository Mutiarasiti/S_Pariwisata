<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempatwisata extends Model
{
    protected $table = "tempatwisatas";
    protected $primaryKey = 'id';
    protected $fillable = ['nama_tempatwisata', 'alamat', 'fasilitas'];
}
