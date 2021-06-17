<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_livreurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('age')->nullable();
            $table->string('adresse')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('type');

            $table->unsignedBigInteger('user_id')->nullable();

                        // then the foreign key
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;


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
        Schema::dropIfExists('user_livreurs');
    }
}
