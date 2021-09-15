<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUser extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "contacts";
    protected $guarded = [];
}
