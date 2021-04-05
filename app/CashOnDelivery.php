<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashOnDelivery extends Model
{
    protected $table = "cod";
    protected $primaryKey = "cod_id";
    protected $guarded = [];
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
