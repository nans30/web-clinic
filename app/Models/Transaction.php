<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['encounter_id', 'status', 'amount_paid', 'payment_date', 'created_by', 'update_by'];

    public function encounter()
    {
        return $this->belongsTo(Encounter::class);
    }
}