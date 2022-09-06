<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssembleeConsulaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assemblee_consulaire', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('chambre_regionale_id')->default(12);

            $table->integer('NbreMembreColJeune')->nullable()->default(12);
            $table->integer('NbreMembreColFemme')->nullable()->default(12);
            $table->integer('NbreMembreH')->nullable()->default(12);
            $table->integer('NbreMembreEntreASPHF')->nullable()->default(12);
            $table->integer('NbreMembreColPr')->nullable()->default(12);
            $table->integer('NbreMembreColExplASPHF')->nullable()->default(12);

            $table->foreign('chambre_regionale_id')->references('id')->on('chambre_regionale')->onDelete('cascade');

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
        Schema::dropIfExists('assemblee_consulaire');
    }
}
