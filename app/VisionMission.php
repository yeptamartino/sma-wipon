<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "vision_missions";
    protected $guarded = [];
}
