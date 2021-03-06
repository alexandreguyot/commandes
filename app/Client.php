<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categorie',
        'nom',
        'prenom',
        'adresse',
        'code_postal',
        'ville',
        'pays',
        'telephone',
        'telephone_secondaire',
        'email',
        'livraison_nom',
        'livraison_prenom',
        'livraison_adresse',
        'livraison_code_postal',
        'livraison_ville',
    ];

    public $timestamps = true;

    public static function getPossibleEnumValues($name){
        $instance = new static; // create an instance of the model to be able to get the table name
        $type = DB::select( DB::raw('SHOW COLUMNS FROM '.$instance->getTable().' WHERE Field = "'.$name.'"') )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach(explode(',', $matches[1]) as $value){
            $v = trim( $value, "'" );
            $enum[] = $v;
        }
        return $enum;
    }

    public function command() {
        return $this->hasMany(Commands::class);
    }
}
