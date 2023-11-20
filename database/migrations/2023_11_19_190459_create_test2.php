<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test2', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprenant_id')->nullable()->default(12);
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');

            $table->string('libelleProjetInstallation', 100)->nullable()->default('text');

            $table->bigInteger('centre_formation_id')->nullable()->default(12);
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
        Schema::dropIfExists('test2');
    }
}
