<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')
                  ->references('id')
                  ->on('commandes')->onDelete('cascade');

            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')
                  ->references('id')
                  ->on('produits')->onDelete('cascade');

            $table->float("total");
            $table->integer("quantity");

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
        Schema::dropIfExists('produits_commandes');
    }
}
