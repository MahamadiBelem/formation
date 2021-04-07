<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('affecter_apprenant_id')->nullable()->default(12);
            
            $table->bigInteger('domaines_installation_id')->nullable()->default(12);
            
            $table->bigInteger('source_financement_id')->nullable()->default(12);
            
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
        Schema::dropIfExists('installations');
    }
}
