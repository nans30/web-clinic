<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    protected $fillable = ['medicine_id', 'quantity', 'type', 'created_by'];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}