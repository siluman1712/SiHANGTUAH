<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriRuangan extends Model
{
    use HasFactory;
    protected $table = 'dbkategoriruang';
    protected $fillable = [
        'idkat',
        'kodekategori',
        'namakategori'
    ];
    protected $primaryKey = 'kodekategori';
    public $incrementing = false;
    protected $keyType = 'string';
}
