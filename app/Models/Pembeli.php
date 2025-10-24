<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';
    protected $fillable = ['id', 'nama_pembeli','jenis_kelamin','telepon',];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pembeli');
    }
}
