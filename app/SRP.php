<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SRP extends Model
{
    protected $table ="srp";
    protected $primaryKey = "srp_id";
    protected $guarded = [];
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
