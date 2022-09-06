<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionPermananteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_permanante', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('chambre_regionale_id')->default(12);

            $table->integer('NbreMembreComOrganisation')->nullable()->default(12);
            $table->integer('NbreComOrganisation')->nullable()->default(12);
            $table->integer('NbreMembreComFinantH')->nullable()->default(12);
            $table->integer('NbreMembreComFinantF')->nullable()->default(12);
            $table->integer('NbreMembreComFoncierDecenH')->nullable()->default(12);
            $table->integer('NbreMembreComFoncierDecenF')->nullable()->default(12);
            $table->integer('NbreMembreComPromoModerAgriH')->nullable()->default(12);
            $table->integer('NbreMembreComPromoModerAgriF')->nullable()->default(12);

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
        Schema::dropIfExists('commission_permanante');
    }
}
