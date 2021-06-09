<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email');
            $table->string('adresse');
            $table->string('payement_method')->nullable();;
            $table->time('heure');
            $table->longText('commentaire');
            $table->string('etat')->nullable();
            $table->string('etatlivreur')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->unsignedBigInteger('userrestaurant_id')->nullable();
             $table->foreign('userrestaurant_id')
                    ->references('id')
                    ->on('user_restaurants');

            $table->unsignedBigInteger('userlivreur_id')->nullable();
            $table->foreign('userlivreur_id')
                        ->references('id')
                        ->on('user_livreurs')->onDelete('cascade');


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
        Schema::dropIfExists('commandes');
    }
}
