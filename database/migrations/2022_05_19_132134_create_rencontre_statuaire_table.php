<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencontreStatuaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencontre_statuaire', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('chambre_regionale_id')->default(12);

            $table->integer('NbreAsConsulairePrevAn')->nullable()->default(12);
            $table->integer('NbreRencBurExecutif')->nullable()->default(12);
            $table->integer('NbreRencComOrganisation')->nullable()->default(12);
            $table->integer('NbreRencComFinan')->nullable()->default(12);
            $table->integer('NbreRencComFoncierDecen')->nullable()->default(12);
            $table->integer('NbreRencComPromoModerAgri')->nullable()->default(12);

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
        Schema::dropIfExists('rencontre_statuaire');
    }
}
