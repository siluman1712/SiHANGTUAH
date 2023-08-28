<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pebin extends Model
{
    use HasFactory;
    protected $table = 'dbpebin';
    protected $fillable = [
        'kd_pebin',
        'ur_pebin'
    ];
    protected $primaryKey = 'kd_pebin';
    public $incrementing = false;
    protected $keyType = 'string';
}
