<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'tips cepat pintar',
                'content' => 'lorem ipsum',
            ],
            [
                'title' => 'Membangun visi misi sukses',
                'content' => 'lorem ipsum',
            ],
        ]);
    }
}
