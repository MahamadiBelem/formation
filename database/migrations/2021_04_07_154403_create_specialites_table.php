<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialites', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('libelleSpecialite', 255)->default('text');
            $table->string('libelleDomaineFormation', 255)->default('text');
            // MAJ
            $table->bigInteger('domaine_formation_id')->default(12);
            $table->foreign('domaine_formation_id')->references('id')->on('domaine_formation')->onDelete('cascade');
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
        Schema::dropIfExists('specialites');
    }
}
