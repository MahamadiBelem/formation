<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstaltest2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instaltest2', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('affecter_apprenant_id')->nullable()->default(12);
            
            $table->bigInteger('domaines_installation_id')->nullable()->default(12);
            
            $table->bigInteger('source_financement_id')->nullable()->default(12);

            $table->bigInteger('region_id')->nullable()->default(12);
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->bigInteger('province_id')->nullable()->default(12);
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->bigInteger('commune_id')->nullable()->default(12);
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            $table->bigInteger('village_id')->nullable()->default(12);
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');

            $table->bigInteger('centre_formation_id')->nullable()->default(12);
            $table->foreign('centre_formation_id')->references('id')->on('centre_formation')->onDelete('cascade');
            
            
            $table->string('annees', 100)->nullable()->default('text');
            $table->date('dateInstallation')->nullable();
            $table->string('lieuInstallation', 255)->nullable()->default('text');
            $table->boolean('confirmedKits')->nullable()->default(false);
            $table->foreign('affecter_apprenant_id')->references('id')->on('affecter_apprenants')->onDelete('cascade');
            
            $table->foreign('domaines_installation_id')->references('id')->on('domaines_installations')->onDelete('cascade');
            
            $table->foreign('source_financement_id')->references('id')->on('source_financements')->onDelete('cascade');
            

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
        Schema::dropIfExists('instaltest2');
    }
}
