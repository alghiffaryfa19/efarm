<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;
    protected $table='screenings';
    protected $guarded = [];

    public function farmer()
    {
        return $this->belongsTo(\App\Models\Farmer::class, 'farmer_id','id');
    }

    public function plant()
    {
        return $this->belongsTo(\App\Models\Plant::class, 'plant_id','id');
    }

    public function sub_screening()
    {
        return $this->hasMany(\App\Models\SubScreening::class, 'screening_id','id');
    }
}
