<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function commands()
    {
        return $this->belongsToMany(Commands::class);
    }
}
