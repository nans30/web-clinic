<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['user_id', 'specialization'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function praktikSchedules()
    {
        return $this->hasMany(PraktikSchedule::class);
    }

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }
}
