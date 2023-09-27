<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'dbpegawai';
    protected $fillable = [
        'nip',
        'nama_depan',
        'nama_belakang',
        'nama',
        'idgolru',
        'tmt_golru',
        'jabatan',
        'tmt_jabatan',
        'keterangan',
        'kdukpb'
    ];
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';
}
}
