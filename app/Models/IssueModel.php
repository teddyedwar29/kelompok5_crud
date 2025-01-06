<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IssueModel extends Model
{
    use HasFactory;

    protected $table = 'issue';
    protected $primaryKey = 'id_issue';
    protected $keyType = 'string';
    protected $allowedFields = [
        'id_issue',
        'nama_issue'
    ];
    protected $fillable = ['id_issue','nama_issue'];
}
