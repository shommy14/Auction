<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Bid::insert([
            ['price' => 500,'product_id' => 3, 'user_id' => 2, 'created_at' => Carbon::now()],
            ['price' => 800,'product_id' => 3, 'user_id' => 6, 'created_at' => Carbon::now()],
            ['price' => 2000,'product_id' => 1, 'user_id' => 6, 'created_at' => Carbon::now()],
            ['price' => 3000,'product_id' => 1, 'user_id' => 7, 'created_at' => Carbon::now()],
            ['price' => 3000,'product_id' => 2, 'user_id' => 2, 'created_at' => Carbon::now()],
        ]);
    }
}
