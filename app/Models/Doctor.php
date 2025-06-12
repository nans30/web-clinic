<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'specialist'];

    public function praktikSchedules()
    {
        return $this->hasMany(PraktikSchedule::class);
    }

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }
}