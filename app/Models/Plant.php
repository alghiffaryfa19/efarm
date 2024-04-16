<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $table='plants';
    protected $guarded = [];

    public function screening()
    {
        return $this->hasMany(\App\Models\Screening::class, 'plant_id','id');
    }
}
