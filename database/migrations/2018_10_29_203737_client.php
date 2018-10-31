<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('categorie', ['Particulier', 'Professionnelle']);
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone');
            $table->string('telephone_secondaire')->nullable();
            $table->string('email');
            $table->string('livraison_nom')->nullable();
            $table->string('livraison_prenom')->nullable();
            $table->string('livraison_adresse')->nullable();
            $table->string('livraison_code_postal')->nullable();
            $table->string('livraison_ville')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
