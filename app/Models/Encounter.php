<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    protected $fillable = ['icd10_id', 'icd9_id', 'booking_id', 'doctor_id', 'remark'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function icd10()
    {
        return $this->belongsTo(Icd10::class);
    }

    public function icd9()
    {
        return $this->belongsTo(Icd9::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function pharmacyOrders()
    {
        return $this->hasMany(PharmacyOrder::class);
    }
}