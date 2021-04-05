<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $primaryKey = "stock_id";
    protected $guarded = [];
   

    public function products ()
    {
        return $this->belongsTo('App\Product');
    }

    public function orderLines ()
    {
        return $this->hasMany('App\Orderline');
    }

    public function price ()
    {
        return $this->hasMany('App\Price');
    }
}
