<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::insert([
            ['name' => 'Product1', 'description'=> 'some description', 'payment' => 'card',
                'shipment' => '2 days', 'sold' => false, 'starter_price' => 200,
                'due_date' => Carbon::now()->addDays(10), 'catId' => 2, 'userId' => 1,
                'created_at' => Carbon::now()
            ],
            ['name' => 'Product2', 'description'=> 'some description', 'payment' => 'cash',
                'shipment' => '1 day', 'sold' => false, 'starter_price' => 400,
                'due_date' => Carbon::now()->addDays(10), 'catId' => 5, 'userId' => 3,
                'created_at' => Carbon::now()
            ],
            ['name' => 'Product3', 'description'=> 'random description', 'payment' => 'cash',
            'shipment' => '1 day', 'sold' => false, 'starter_price' => 300,
            'due_date' => '2020-1-30', 'catId' => 6, 'userId' => 3,
            'created_at' => '2020-1-20'
            ]
        ]);
    }
}
