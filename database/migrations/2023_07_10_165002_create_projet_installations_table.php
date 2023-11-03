<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetInstallationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_installations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('domaines_installation_id')->nullable()->default(12);
            $table->foreign('domaines_installation_id')->references('id')->on('domaines_installations')->onDelete('cascade');

            $table->bigInteger('apprenant_id')->nullable()->default(12);
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');

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
        Schema::dropIfExists('projet_installations');
    }
}
