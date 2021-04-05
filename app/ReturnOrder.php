<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnOrder extends Model
{
    protected $table = "return_orders";
    protected $primaryKey = "return_id";
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function reason()
    {
        return $this->belongsTo('App\Reason');
    }
}
