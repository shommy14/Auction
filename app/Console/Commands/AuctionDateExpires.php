<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;

class AuctionDateExpires extends Command implements shouldQueue
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets product status as unavailable when due date expires';

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
        $product = Product::where('sold', '=', 0)->whereDate('due_date','<',Carbon::now())->pluck('id');
        Product::where('id',$product)->update([
           'sold' => 1
        ]);
    }
}
