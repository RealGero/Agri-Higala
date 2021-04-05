<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "product_types";
    protected $primaryKey = "product_type_id";
    
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
