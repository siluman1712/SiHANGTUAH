<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodefikasiBMN extends Model
{
    use HasFactory;
    protected $table = 'dbkodefbmn';
    protected $fillable = [
        'satuan',
        'kd_brg',
        'ur_sskel',
        'nourut'
    ];
    protected $primaryKey = 'kd_brg';
    public $incrementing = false;
    protected $keyType = 'string';
}
