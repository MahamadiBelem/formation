<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariatExecutifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretariat_executifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cooperative_id')->default(12);
            $table->string('DenominationSecretariatCooperative', 100)->unique()->default('text');
            $table->string('contactSecretariatCooperative', 100)->nullable()->default('text');
            $table->integer('nombreSalarieHomme')->nullable()->default(12);
            $table->integer('nombreSalarieFemme')->nullable()->default(12);
            $table->date('dateDebutMandat')->nullable();
            $table->date('dateFinMandat')->nullable();

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
        Schema::dropIfExists('secretariat_executifs');
    }
}
