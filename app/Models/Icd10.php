<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icd10 extends Model
{
    protected $table = 'icd_10';
    protected $fillable = ['code', 'description'];

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }
}