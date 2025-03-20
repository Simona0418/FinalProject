<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
                        'name', 
                        'description', 
                        'service_category_id', 
                        'industry_id'
                        ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceIndustry()
    {
        return $this->belongsTo(Industry::class, 'industry_id');
    }
}

