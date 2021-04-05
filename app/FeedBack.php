<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = "feedbacks";
    protected $primaryKey = "feedback_id";
    protected $guarded = [];
}