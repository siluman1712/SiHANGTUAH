<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigTanggal extends Model
{
    use HasFactory;
    protected $table = 'konfig_tanggals';
    protected $fillable=[
        'id',
        'tglAwal', 
        'tglAkhir', 
        'tahun_anggaran'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
