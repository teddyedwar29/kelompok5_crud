<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'detail_artikel';
    protected $primaryKey = 'id_artikel';
    protected $keyType = 'string';
    protected $allowedFields = [
        'id_artikel',
        'judul_artikel'
    ];
    protected $fillable = ['id_artikel','judul_artikel'];
}
