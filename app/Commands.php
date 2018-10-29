<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commands extends Model
{
    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
