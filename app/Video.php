<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "videos";
    protected $guarded = [];

}
