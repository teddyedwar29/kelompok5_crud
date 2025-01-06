<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EditorModel extends Model
{
    use HasFactory;

    protected $table = 'editor';
    protected $primaryKey = 'id_editor';
    protected $keyType = 'string';
    protected $allowedFields = [
        'id_editor',
        'nama_editor'
    ];
    protected $fillable = ['id_editor','nama_editor'];
}
