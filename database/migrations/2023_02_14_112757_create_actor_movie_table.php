<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();

             //Ho bisogno di 2 foreign key per mettere in relazione le 2 tabelle
             $table->unsignedBigInteger("actor_id");
             $table->foreign("actor_id")->references("id")->on("actors");
 
 
             $table->unsignedBigInteger("movie_id");
             $table->foreign("movie_id")->references("id")->on("movies");

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
        Schema::dropIfExists('actor_movie');
    }
};
