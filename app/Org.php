<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    protected $table="orgs";

    protected $primaryKey = "org_id";
    protected $guarded =[];
}
