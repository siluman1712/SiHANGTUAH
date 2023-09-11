<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbgedung extends Model
{
    use HasFactory;
    protected $table = 'dbgedung';
    protected $fillable = [
        'idg',
        'gedung',
        'uraiangedung'
    ];
    protected $primaryKey = 'idg';
    public $incrementing = false;
    protected $keyType = 'string';
}
