<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariatExCraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretariat_ex_cra', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('chambre_regionale_id')->default(12);

            $table->string('NomPrenomSecretaireGeneral', 100)->nullable()->default('text');
            $table->integer('Contact')->nullable()->default(12);
            $table->date('DatePriseServiceSecretaireGeneral')->nullable();
            $table->integer('NbreSalaireH')->nullable()->default(12);
            $table->integer('NbreSalaireF')->nullable()->default(12);

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
        Schema::dropIfExists('secretaiat_ex_cra');
    }
}
