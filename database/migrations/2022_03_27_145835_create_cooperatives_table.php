<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooperativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperatives', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('commune_id')->default(12);
            $table->bigInteger('type_organisation_id')->default(12);
            $table->bigInteger('forme_juridique_id')->default(12);
            $table->bigInteger('genre_id')->default(12);



            $table->string('denomination', 100)->unique()->default('text');
            $table->string('noImmatriculation', 100)->unique()->default('text');
            $table->date('dateCreation')->nullable();
            $table->string('telephone', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->string('boitepostal', 100)->nullable()->default('text');
            $table->string('coordonnegpslong', 100)->nullable()->default('text');
            $table->string('coordonnegpslat', 100)->nullable()->default('text');
            $table->string('siteWeb', 100)->nullable()->default('text');
            $table->string('nomFaitiereAffliation', 100)->nullable()->default('text');
            $table->integer('montantCapital')->nullable()->default(12);
            $table->integer('noMembreHomme')->nullable()->default(12);
            $table->integer('noMenbreFemme')->nullable()->default(12);
            $table->string('limitationNombreMandat', 100)->nullable()->default('text');
            $table->string('dureeMandatOrganeGestion', 100)->nullable()->default('text');
            $table->string('dureeMandatOrganecontrol', 100)->nullable()->default('text');

            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            $table->foreign('type_organisation_id')->references('id')->on('type_organisations')->onDelete('cascade');
            $table->foreign('forme_juridique_id')->references('id')->on('forme_juridiques')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');


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
        Schema::dropIfExists('cooperatives');
    }
}
