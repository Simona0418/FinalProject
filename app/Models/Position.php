<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TeamMember;


class Position extends Model
{
    protected $fillable = [
        'name',
    ];

    public function team_members()
    {
        return $this->hasMany(TeamMember::class);
    }
}
