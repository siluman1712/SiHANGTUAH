<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    use HasFactory;
    protected $table = 'dbwilayah';
    protected $fillable = [
        'kd_wilayah',
        'ur_wilayah'
    ];
    protected $primaryKey = 'kd_wilayah';
    public $incrementing = false;
    protected $keyType = 'string';
}
