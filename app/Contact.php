<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "contacts";
    protected $guarded = [];
}
