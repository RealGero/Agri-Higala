<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
    protected $guarded = [];
   

    public function productType()
    {
        return $this->belongsTo('App\ProductType');

    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
        
    }

    public function srp()

    {
        return $this->hasMany('App\SRP');


    }
}
