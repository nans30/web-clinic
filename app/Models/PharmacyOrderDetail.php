<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyOrderDetail extends Model
{
    protected $fillable = ['pharmacy_order_id', 'medicines_id', 'quantity', 'day', 'duration'];

    public function pharmacyOrder()
    {
        return $this->belongsTo(PharmacyOrder::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicines_id');
    }
}