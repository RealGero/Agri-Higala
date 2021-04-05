<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $table = "reasons";
    protected $primaryKey = "reason_id";
    protected $guarded = [];

    public function returnOrder()
    {
        return $this->hasMany('App\ReturnOrder');
    }
}
