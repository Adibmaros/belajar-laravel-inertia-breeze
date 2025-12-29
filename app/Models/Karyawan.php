<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{

    use HasFactory;
    protected $fillable = [
         'nip',
        'nama',
        'email',
        'no_hp',
        'jenis_kelamin',
        'alamat',
        'jabatan',
        'gaji',
        'tanggal_masuk',
        'status'
    ];

    protected $casts = [
        'tanggal_masuk' => 'date',
        'gaji' => 'decimal:2'
    ];
}
