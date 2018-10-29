<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref',
        'nom',
        'prix',
    ];

    public function commands()
    {
        return $this->belongsToMany(Commands::class);
    }
}
