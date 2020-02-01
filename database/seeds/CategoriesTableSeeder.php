<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Category::insert([
            ['name' => 'Clothes'],
            ['name' => 'Books'],
            ['name' => 'Phones'],
            ['name' => 'Art'],
            ['name' => 'Games'],
            ['name' => 'Computers'],
            ['name' => 'Shoes'],
            ['name' => 'Babies stuff'],
            ['name' => 'Music'],
            ['name' => 'Films'],
            ['name' => 'Body care'],
            ['name' => 'Collectibles'],
            ['name' => 'Tools'],
            ['name' => 'Cars'],
            ['name' => 'Magazine'],
        ]);
    }
}
