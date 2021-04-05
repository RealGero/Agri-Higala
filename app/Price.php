<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = "prices";
    protected $primaryKey = "price_id";
    protected $guarded = [];
    public function stock ()
    {

     return $this->belongsTo('App\Stock');
    }
}
