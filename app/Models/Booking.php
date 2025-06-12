<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'service_id', 'schedule_id', 'status', 'booking_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function schedule()
    {
        return $this->belongsTo(PraktikSchedule::class, 'schedule_id');
    }

    public function encounter()
    {
        return $this->hasOne(Encounter::class);
    }
}