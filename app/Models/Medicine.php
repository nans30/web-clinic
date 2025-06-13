<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'description', 'stock', 'price', 'category_id', 'unit_id', 'image']; 



    public function unit()  
    {
        return $this->belongsTo(Unit::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stockHistories()
    {
        return $this->hasMany(StockHistory::class);
    }
}