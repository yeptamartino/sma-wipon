<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "news";
    protected $guarded = [];
}
