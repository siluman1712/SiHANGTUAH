<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbsatker extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'pebin', 'pbi', 'wilayah', 'ukpb',
        'upkpb','kdukpb', 'nmukpb', 'nmpb', 'jk',
        'kpknl'
    ];
}
