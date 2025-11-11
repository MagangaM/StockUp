<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;
<<<<<<< HEAD
=======
use App\Models\Supplier;
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
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
        Category::factory(50)->create();
        Product::factory(250)->create();
<<<<<<< HEAD
=======
        Supplier::factory(20)->create();
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007

        User::create([
            'name'=>'Maganga Makau',
            'email'=>'magangamakau@gmail.com',
            'password'=>bcrypt('Maganga101')
        ]);
       
    }
}
