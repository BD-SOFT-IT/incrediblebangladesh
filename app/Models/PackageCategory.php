<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    protected $fillable = ['category_title','category_tag'];

    public function schedules()
    {
        return $this->hasMany('App\Models\TravelSchedule');
    }
}
