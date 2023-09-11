<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dblantai extends Model
{
    use HasFactory;
    protected $table = 'dblantai';
    protected $fillable = [
        'idlt',
        'gedung',
        'ltgedung',
        'uraianlantai'

    ];
    protected $primaryKey = 'idlt';
    public $incrementing = false;
    protected $keyType = 'string';
}
