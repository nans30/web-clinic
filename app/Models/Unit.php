<?php

// 1. Unit.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['name'];

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}