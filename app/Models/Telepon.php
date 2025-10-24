<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Telepon extends Model
{

    use HasFactory;

    //kolom yg dpt ditambahkan
    protected $fillable = ['id','nomor','id_pengguna',];
    public $timestamps = true;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}