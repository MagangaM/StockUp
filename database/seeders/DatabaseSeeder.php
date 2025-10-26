<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Category;
use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Branch::factory(10)->create();
        Category::factory(100)->create();

        User::create([
            'name'=>'Maganga Makau',
            'email'=>'magangamakau@gmail.com',
            'password'=>bcrypt('Maganga101')
        ]);
       
    }
}
