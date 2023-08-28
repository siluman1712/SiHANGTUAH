<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pbi extends Model
{
    use HasFactory;
    protected $table = 'dbpbi';
    protected $fillable = [
        'kd_pebin',
        'kd_pbi',
        'ur_pbi'
    ];
    protected $primaryKey = 'kd_pbi';
    public $incrementing = false;
    protected $keyType = 'string';
}
