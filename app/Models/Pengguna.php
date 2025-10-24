<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'penggunas';
    protected $fillable = ['id', 'nama'];

    //relasi one to one dengan telepon
    public function telepons()
    {
        return $this->hasOne(Telepon::class);
    }
}
