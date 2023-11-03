<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */   
    public function up()
    {
        Schema::create('centre_formation', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('commune_id')->default(12);
            
            $table->bigInteger('regime_id')->default(12);
            
            $table->string('denomination', 255)->default('text');
            //mise a jour 
            $table->string('typeStructure', 255)->default('text');
            $table->string('promoteur', 255)->default('text');
            $table->string('gestionnaire', 255)->default('text');

            $table->string('localisation', 255)->default('text');
            $table->string('adresse', 255)->default('text');
            $table->string('statut', 255)->default('text');
            $table->string('capacite', 255)->default('text');
            $table->string('referenceOuverture', 255)->nullable()->default('text');
            $table->date('dateOuverture')->nullable();

            
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
        Schema::dropIfExists('centre_formation');
    }
}
