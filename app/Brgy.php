<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brgy extends Model
{
    protected $table="brgys";

    protected $primaryKey = "brgy_id";
    protected $guarded =[];


    public function buyer()
    {
        return $this->hasOne(Buyer::class,'brgy_id','brgy_id');
    }
}
