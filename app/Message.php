<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    protected $primaryKey = "message_id";
    protected $guarded = [];
    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

    public function buyer()
    {
        return $this->belongsTo('App\Buyer');
    }
}
