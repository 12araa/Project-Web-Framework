<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan2301010068 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'kode',
        'nama_pelanggan',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir'
    ];
}
