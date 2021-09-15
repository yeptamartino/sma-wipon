<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "announcements";
    protected $guarded = [];
}
