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
            $table->date('date');
            $table->enum('type', ['Devis', 'Commande']);
            $table->enum('type_paiment', ['Chèque', 'Carte Bancaire', 'Chèque']);
            $table->enum('statut', ['Attente de Paiement', 'Paiement Accepté', 'Commande terminée', 'Problème de paiement', 'Mise en quarantaine']);
            $table->enum('livraison', ['Livraison Colissimo', 'Livraison 1 personne', 'Livraison 2 personnes']);
            $table->integer('THT');
            $table->integer('TTTC');
            $table->longText('commentaires');
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
