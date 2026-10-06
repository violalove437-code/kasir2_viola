<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HasFactory;

class jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $fillable = 
    [
        'kode_jurusan',
        'nama_jurusan',
        'keterangan',
        'status',
    ];
}
