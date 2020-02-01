<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['user_id','product_id','price'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id' );
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
