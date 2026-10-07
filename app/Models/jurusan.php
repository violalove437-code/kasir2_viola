<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $fillable = 
    [
        'kode_jurusan',
        'nama_jurusan',
        'keterangan',
        'status',
    ];
}
