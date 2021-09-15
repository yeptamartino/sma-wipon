<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "teachers";
    protected $guarded = [];
}
