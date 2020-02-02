<?php

namespace App\Console\Commands;

use App\Bid;
use App\Product;
use Illuminate\Console\Command;

class SetBidingWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seting bid winner, product buyer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $max_offer = 0;
        $product_buyer = null;
        $product = Product::where('buyer_id','=',null)->where('sold','=',1)->pluck('id');
        $product_id= $product->first();
        $bids = Bid::where('product_id',$product_id)->get();

        if($product != null)
        {
            foreach ($bids as $bid)

                if($max_offer < $bid -> price) {
                    $max_offer = $bid->price;
                    $product_buyer = $bid->user_id;
                }


        Product::where('id',$product_id)->update([
            'buyer_id' => $product_buyer,
            'price_sold' => $max_offer
        ]);

        }
    }
}
