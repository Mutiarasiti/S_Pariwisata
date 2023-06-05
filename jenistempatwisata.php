<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenistempatwisata extends Model
{
    use HasFactory;
    protected $table = "jenistempatwisata";
    protected $primaryKey = 'id';
    protected $fillable = ['id_kriteriatempatwisata', 'lokasi', 'deskripsi'];
}
