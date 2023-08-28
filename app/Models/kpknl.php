<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kpknl extends Model
{
    use HasFactory;
    protected $table = 'dbkpknl';
    protected $fillable = [
        'kdkpknl',
        'urkpknl',
        'kdlokasi',
        'alamat'
    ];
    protected $primaryKey = 'kdkpknl';
    public $incrementing = false;
    protected $keyType = 'string';
}
