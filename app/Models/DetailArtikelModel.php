<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $keyType = 'string';
    protected $allowedFields = [
        'id_artikel',
        'id_author',
        'penulis_ke'
    ];
    protected $fillable = ['id_artikel','id_author','penulis_ke'];
}
