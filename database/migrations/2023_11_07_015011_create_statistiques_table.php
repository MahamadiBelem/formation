<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id();
            $table->integer('nbre_centre_formations')->nullable();
            $table->integer('nbre_ecoles')->nullable();
            $table->integer('nbre_lycees')->nullable();
            $table->integer('nbre_apprenants')->nullable();
            $table->integer('nbre_formateurs')->nullable();
            $table->integer('nbre_projet_installations')->nullable();
            $table->integer('nbre_kits')->nullable();
            $table->integer('nbre_domaine_formations')->nullable();
            $table->integer('nbre_cyle_formations')->nullable();
            $table->integer('nbre_modules')->nullable();
            $table->integer('nbre_infrastructures')->nullable();
            $table->integer('nbre_amenagementsb')->nullable();
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
        Schema::dropIfExists('statistiques');
    }
}
