<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionementOrganeCooperativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionement_organe_cooperatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cooperative_id')->default(12);

            $table->integer('nombreAgOrdinaire')->nullable()->default(12);
            $table->integer('nombreRencontreOrganeGestion')->nullable()->default(12);
            $table->integer('nombreRencontreSurveillance')->nullable()->default(12);
            $table->string('semestre', 100)->nullable()->default('text');
            $table->integer('annee')->nullable()->default(12);

            $table->foreign('cooperative_id')->references('id')->on('cooperatives')->onDelete('cascade');

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
        Schema::dropIfExists('fonctionement_organe_cooperatives');
    }
}
