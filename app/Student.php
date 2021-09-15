<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "students";
    protected $guarded = [];
}
