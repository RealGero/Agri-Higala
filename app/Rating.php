<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "ratings";
    protected $primaryKey = "rating_id";
    protected $guarded = [];
   
    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
