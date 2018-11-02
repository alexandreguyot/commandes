<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->date('date')->nullable();
            $table->enum('type', ['Devis', 'Commande'])->nullable();
            $table->enum('type_paiement', ['Chèque', 'Carte Bancaire', 'Virement'])->nullable();
            $table->enum('statut', ['Attente de Paiement', 'Paiement Accepté', 'Commande terminée', 'Problème de paiement', 'Mise en quarantaine'])->nullable();
            $table->enum('livraison', ['Livraison offerte', 'Livraison Colissimo', 'Livraison 1 personne', 'Livraison 2 personnes'])->nullable();
            $table->float('prix_livraison')->nullable();
            $table->float('THT')->nullable();
            $table->float('TTTC')->nullable();
            $table->float('remise')->nullable();
            $table->longText('commentaires')->nullable();
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
        Schema::drop('commands');
    }
}

/*
 *
date
n° de commande
type > devis ou commande
type paiement > chèque / cb / virement
statut > attente paiement / paiement accepté / commande terminée / probleme paiement / mise en quarantaine

coordonnées de facturation :

nom
prenom
adresse
complement adresse
code postal
ville

tél
tél secondaire
email

coordonnées de livraison si different

nom
prenom
adresse
complement adresse
code postal
ville
 */
