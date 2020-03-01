<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelSchedule extends Model
{
    protected $fillable = [
        'package_schedule_id','package_schedule','package_max_member','package_ex_description','package_schedule_time'
    ];

    public function TravelPackageName()
    {
        return $this->hasMany(TravelPackage::class,'id','package_schedule_id');
    }

}
