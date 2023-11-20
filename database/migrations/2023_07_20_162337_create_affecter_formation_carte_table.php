<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterFormationCarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_formation_carte', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('centre_formation_id')->nullable()->default(12);
            $table->date('dateDebut')->nullable();
            $table->date('dateCloture')->nullable();
            $table->string('theme', 100)->nullable()->default('text');

            $table->integer('duree')->nullable();
            $table->foreign('centre_formation_id')->references('id')->on('centre_formation')->onDelete('cascade');
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
        Schema::dropIfExists('affecter_formation_carte');
    }
}
