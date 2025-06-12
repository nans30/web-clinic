<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyOrder extends Model
{
    protected $fillable = ['encounter_id', 'status', 'created_by', 'deleted_by'];

    public function encounter()
    {
        return $this->belongsTo(Encounter::class);
    }

    public function details()
    {
        return $this->hasMany(PharmacyOrderDetail::class);
    }
}