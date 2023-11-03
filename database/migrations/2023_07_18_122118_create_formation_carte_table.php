<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationCarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_carte', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('source_financement_id')->nullable()->default(12);
            $table->foreign('source_financement_id')->references('id')->on('source_financements')->onDelete('cascade');
            
            $table->bigInteger('specialite_id')->nullable()->default(12);
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');
           
            $table->string('themes', 255)->nullable()->default('themes');

            $table->integer('nbreHomme')->nullable()->default(12);
            $table->integer('nbreFemme')->nullable()->default(12);
            $table->string('coutFormation', 100)->nullable()->default('text');
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
        Schema::dropIfExists('formation_carte');
    }
}
