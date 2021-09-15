<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "histories";
    protected $guarded = [];
}
