<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'nama_pekerjaan',
        'alamat',
        'no_telp',
        'email',
        'nama_pengguna'
    ];
}
