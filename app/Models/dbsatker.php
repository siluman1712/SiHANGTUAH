<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbsatker extends Model
{
    use HasFactory;
    protected $table = 'dbsatkers';
    protected $fillable=[
        'id',
        'pebin', 
        'pbi', 
        'wilayah', 
        'ukpb',
        'upkpb',
        'kdukpb', 
        'nmukpb', 
        'nmpb', 
        'jk',
        'kpknl'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
