<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminType extends Model
{
    protected $table = "admin_types";
    protected $primaryKey = "admin_type_id";
    protected $guarded = [];

    public function admin()
    {
        return $this->hasOne('App\Admin');
    }
}
