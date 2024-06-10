<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;
    protected $table='recommendations';
    protected $guarded = [];

    public function disease()
    {
        return $this->belongsTo(\App\Models\Disease::class, 'disease_id','id');
    }
}
