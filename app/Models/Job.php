<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function rJobCategory()
    {
        return $this->belongsTo(JobCategory::class,'job_category_id');
    }

    public function rJobLocation()
    {
        return $this->belongsTo(JobLocation::class,'job_location_id');
    }
}
