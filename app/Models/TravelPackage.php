<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    protected $fillable = [
        'package_category','package_title','package_sub_title','package_best_time','package_duration',
        'package_description','package_price','package_img'
    ];


    public function schedule()
    {
        return $this->hasMany(TravelSchedule::class);
    }

}
