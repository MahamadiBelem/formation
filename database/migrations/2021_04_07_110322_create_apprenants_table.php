<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('niveau_instruction_id')->default(12);
            
            $table->bigInteger('commune_id')->default(12);
            
            $table->string('matricule', 100)->unique()->default('text');
            $table->string('nom', 255)->nullable()->default('text');
            $table->string('prenom', 255)->nullable()->default('text');
            $table->date('dateNaissance')->nullable();
            $table->string('sexe', 100)->nullable()->default('text');
            $table->string('contact', 100)->nullable()->default('text');
            $table->string('situationMatrimoniale', 100)->nullable()->default('text');
            $table->string('nombreEnfant', 100)->nullable()->default('text');
            $table->string('localites', 255)->nullable()->default('text');
            
            $table->foreign('niveau_instruction_id')->references('id')->on('niveau_instructions')->onDelete('cascade');
            
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            
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
        Schema::dropIfExists('apprenants');
    }
}
