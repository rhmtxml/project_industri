<?php

namespace App\Models;
use App\Models\Murid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    
    use HasFactory;

    protected $table = 'kelass';


    protected $fillable = ['id', 'nama_kelas'];



    public function murid()
    {
        return $this->hasMany(Murid::class, 'id_kelas');
    }
}

