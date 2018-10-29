<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commands extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
