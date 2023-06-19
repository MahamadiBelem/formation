<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteorganesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activiteorganes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('filiere_id');
            $table->bigInteger('maillon_id');



            $table->string('activitePrincipale', 100)->nullable()->default('text');


            $table->foreign('filiere_id')->references('id')->on('filieres')->onDelete('cascade');
            $table->foreign('maillon_id')->references('id')->on('maillons')->onDelete('cascade');
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
        Schema::dropIfExists('activiteorganes');
    }
}
