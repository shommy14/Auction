<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','starter_price','payment','shipment','sold','catId','userId',
        'due_date','buyer_id','price_sold'];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId' );
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'catId');
    }
    public function bid()
    {
        return $this->hasOne('App\Bid', 'product_id');
    }
}
