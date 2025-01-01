<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    use HasFactory;

    protected $table = 'author';
    protected $primaryKey = 'id_author';
    protected $keyType = 'string';
    protected $allowedFields = [
        'id_author',
        'nama_author',
        'prodi',
        'afiliasi',
        'email',
        'wa'
    ];
    protected $fillable = ['nama_author','prodi','afiliasi','email','wa'];
}
