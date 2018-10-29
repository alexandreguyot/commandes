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
        Schema::table('commands_products', function(Blueprint $table) {
            $table->foreign('commands_id')->references('id')->on('commands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('commands_products', function(Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commands_products');
    }
}
