<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GCash extends Model
{
    protected $table = "gcash";
    protected $primaryKey = "gcash_id";

    protected $guarded = [];
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
