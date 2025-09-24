<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tanggal_lahir','tempat_lahir','agama','alamat','telepon','email'];
    public $timestamp   =true;
}
