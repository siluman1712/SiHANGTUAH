<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbuniteselon extends Model
{
    use HasFactory;
    protected $table = 'dbuniteselon';
    protected $fillable = [
        'idues',
        'uniteselon',
        'uraian'

    ];
    protected $primaryKey = 'idues';
    public $incrementing = false;
    protected $keyType = 'string';
}
