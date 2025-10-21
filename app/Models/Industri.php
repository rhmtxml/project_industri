<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $fillable = ['Nama_lengkap','jenis_kelamin','tanggal_lahir','tempat_lahir','alamat'];
}
