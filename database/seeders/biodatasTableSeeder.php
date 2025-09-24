<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class biodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'Dikri Nur Rohmat',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-5-1',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Kp.ciodeng 01',
                'telepon' => '08346543345',
                'email' => 'dikri@gmail.com',
            ],
            [
                'nama_lengkap' => 'Aliva dian nugraha',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-12-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '08346567785',
                'email' => 'aliva@gmail.com',
            ],
            [
                'nama_lengkap' => 'Reihan azka vahlepy',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-8-22',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bojong malaka',
                'telepon' => '0834658245',
                'email' => 'reihan@gmail.com',
            ],
            [
                'nama_lengkap' => 'Teguh firmansyah',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-4-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Nusa',
                'telepon' => '08433405435',
                'email' => 'teguh@gmail.com',
            ],
            [
                'nama_lengkap' => 'Marsha Bara Suwarna',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-2-3',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Banjaran',
                'telepon' => '08386433345',
                'email' => 'bara@gmail.com',
            ],
            [
                'nama_lengkap' => 'Muhammad Jihad P.D',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-3-2',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bandung',
                'telepon' => '08346753345',
                'email' => 'jihad@gmail.com',
            ],
            [
                'nama_lengkap' => 'M.Ilman',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-5-3',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bandung',
                'telepon' => '08345673345',
                'email' => 'ilman@gmail.com',
            ],
            [
                'nama_lengkap' => 'Davin GM',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-8-3',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bandung',
                'telepon' => '08346543345',
                'email' => 'dapin@gmail.com',
            ],
            [
                'nama_lengkap' => 'Fakhri',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-7-5',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bandung',
                'telepon' => '08346543345',
                'email' => 'fahri@gmail.com',
            ],
            [
                'nama_lengkap' => 'rehan ramadan',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-8-3',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'bandung',
                'telepon' => '08346543345',
                'email' => 'rehan@gmail.com',
            ],
            
            
        ]);
    }
}
