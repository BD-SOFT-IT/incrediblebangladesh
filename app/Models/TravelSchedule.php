<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelSchedule extends Model
{
    protected $fillable = [
        'package_id','package_schedule','package_max_member','package_ex_description','package_schedule_time'
    ];

    public function package()
    {
        return $this->belongsTo(TravelPackage::class);
    }


}
