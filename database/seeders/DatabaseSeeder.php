<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
use App\Models\Biodata;
use App\Models\Industri;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            postsTableSeeder::class,
        ]);
        $this->call([
            biodatasTableSeeder::class,
        ]);
        $this->call(IndustriSeeder::class);


        product::create([
            'name' => 'Basreng',
            'description' => 'basreng enak dan gurih',
            'price' => 3000,
            'stock' => 3000,
        ]);
    }
}
