<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_apprenants', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('centre_formation_id')->default(12);
            
            $table->bigInteger('formation_id')->default(12);
            
            $table->bigInteger('apprenant_id')->default(12);
            
            
            $table->foreign('centre_formation_id')->references('id')->on('centre_formation')->onDelete('cascade');
            
            
            //$table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
            

            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
            
            $table->string('annees', 100)->nullable()->default('text');
            $table->date('dateInscription');
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
        Schema::dropIfExists('affecter_apprenants');
    }
}
