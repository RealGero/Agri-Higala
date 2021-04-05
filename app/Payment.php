<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $primaryKey = "payment_id";
    protected $guarded = [];

    public function cod()
    {
        return $this->hasOne('App\CashOnDelivery');
    }

    public function gcash()
    {
        return $this->hasOne('App\GCash');
    }

    public function order()
    {
        return $this->hasOne('App\Order');
    }
}
