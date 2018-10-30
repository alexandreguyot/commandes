<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('commands_products', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('commands_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->integer('nombre')->unsigned();
            $table->foreign('commands_id')->references('id')->on('commands')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('products_id')->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commands_products', function(Blueprint $table) {
            $table->dropForeign('commands_products_commands_id_foreign');
            $table->dropForeign('commands_products_products_id_foreign');
        });

        Schema::drop('commands_products');
    }
}
