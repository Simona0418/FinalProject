<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function partners(){
        return $this->hasMany(Partner::class);
    }
}



