<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('industris')->insert([
            [
                'nama_lengkap' => 'Dikri Nur Rohmat',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-5-1',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bandung',
            ],
            [
                'nama_lengkap' => 'Teguh Firmansyah',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-7-6',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bojong soang',
            ],
            [
                'nama_lengkap' => 'Reihan Azka Vahlepy',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-8-1',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bojong asih',
            ],
            [
                'nama_lengkap' => 'Aliva dian nugraha',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-12-12',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Banjaran',
            ],
            [
                'nama_lengkap' => 'Muhammad jihad',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-3-3',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Rancamanyar',
            ],
            [
                'nama_lengkap' => 'Muhammad ilham',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-2-9',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Sayuran',
            ],
            [
                'nama_lengkap' => 'Rakha doang',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-4-8',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Cilebak',
            ],
            [
                'nama_lengkap' => 'Ilman abidullah',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-2-8',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bojong malaka',
            ],
            [
                'nama_lengkap' => 'Muhammad Radietya',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-4-10',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Ciodeng',
            ],
            [
                'nama_lengkap' => 'davina karamoy',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2009-3-1',
                'tempat_lahir' => 'Bandung',
                'alamat' => 'Bahuan',
            ]
            ]);
    }
}
