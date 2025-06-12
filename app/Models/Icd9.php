<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icd9 extends Model
{
    protected $table = 'icd_9';
    protected $fillable = ['code', 'description'];

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }
}