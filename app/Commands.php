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
    protected $fillable = [
        'date',
        'type',
        'type_paiement',
        'statut',
        'livraison',
        'prix_livraison',
        'THT',
        'TTC',
        'remise',
        'commentaires',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
