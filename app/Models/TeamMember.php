<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'picture',
        'name',
        'surname',
        'position_id',
        'short_profile',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}

