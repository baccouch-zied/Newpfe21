<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telephone');

            $table->longText('description')->nullable();
            $table->time('ouverture')->nullable();
            $table->time('fermeture')->nullable();
            $table->longText('jour')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();

            $table->string('adresse')->nullable();
            $table->boolean('etat')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('type');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('user_restaurants');
    }
}
