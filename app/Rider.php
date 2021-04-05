<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    protected $table = "riders";
    protected $primaryKey = "rider_id";
    protected $guarded = [];

    // protected $fillable=[
    //     'user_id','seller_id','first_name','middle_name','last_name','mobile_number','rider_image'
    // ];
   

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }


}
