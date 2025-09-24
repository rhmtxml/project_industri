<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'Dikri Nur Rohmat',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-5-1',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'aliva dianugraha',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-12-12',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Teguh firmansyah',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-4-24',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Marsha bara suarna',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-2-3',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Reihan azka vahlepy',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-8-22',
                'kelas' => 'XI RPL 1',
            ],
        ]);
    }
}
