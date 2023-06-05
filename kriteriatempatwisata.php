<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteriatempatwisata extends Model
{
    use HasFactory;
    protected $table = "kriteriatempatwisata";
    protected $primaryKey = 'id';
    protected $fillable = ['id_tempatwisata', 'nilai', 'deskripsi'];
}
