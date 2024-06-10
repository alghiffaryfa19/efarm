<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $table='diseases';
    protected $guarded = [];


    public function sub_screening()
    {
        return $this->hasMany(\App\Models\SubScreening::class, 'disease_id','id');
    }

    public function recommendations()
    {
        return $this->hasMany(\App\Models\Recommendation::class, 'disease_id','id');
    }
}
