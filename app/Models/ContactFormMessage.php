<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormMessage extends Model
{
    protected $fillable = [
        'email',
        'subject',
        'message',
        'is_read',
        'deleted_at',
    ];
}


