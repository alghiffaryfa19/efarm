<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubScreening extends Model
{
    use HasFactory;
    protected $table='sub_screenings';
    protected $guarded = [];

    public function screening()
    {
        return $this->belongsTo(\App\Models\Screening::class, 'screening_id','id');
    }

    public function disease()
    {
        return $this->belongsTo(\App\Models\Disease::class, 'disease_id','id');
    }
}
