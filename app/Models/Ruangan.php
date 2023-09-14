<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'dbruangan';
    protected $fillable = [
        'idruang',
        'ruanggedung',
        'lantai',
        'uniteselon',
        'kategori',
        'urutruangan',
        'koderuangan',
        'namaruangan',
        'luasruangan',
        'nippenanggungjawab',
        'namapenanggungjawab',
        'keterangan',
        'kdukpb'

    ];
    protected $primaryKey = 'koderuangan';
    public $incrementing = false;
    protected $keyType = 'string';
}
