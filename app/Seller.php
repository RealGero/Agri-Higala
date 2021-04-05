<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Seller as Authenticatable;
class Seller extends Model
{
    protected $table = "sellers";
    protected $primaryKey = "seller_id";
    
    

    protected $fillable=[
        'organization_name','email','mobile_number','street','barangay','schedule_online_time',
        'seller_image','seller_description','user_id'
    ];
    public function user()
    {

        return $this->belongsTo('App\User');
    }

    public function riders()
    {

        return $this->hasMany('App\Rider');
    }

    public function messages()
    {

        return $this->hasMany('App\Message');
    }
}
