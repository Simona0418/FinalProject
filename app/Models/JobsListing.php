<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobsListing extends Model
{
     protected $fillable = [
        'title',
        'description',
        'type',
        'work_mode',
        'location',
    ];
}
