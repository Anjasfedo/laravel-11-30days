<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey:'job_listing_id');
    }

    // $tag->jobs()->attach(App\Models\Job::find(1));
    // or
    // $tag->jobs()->attach(1);
}