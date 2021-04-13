<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_formateurs', function (Blueprint $table) {
           
           $table->bigIncrements('id');
           
           $table->bigInteger('formateur_id')->nullable()->default(12);
           
           $table->bigInteger('centre_formation_id')->nullable()->default(12);
           
           $table->date('dateAffectation');
           $table->string('regimeFormateur', 100)->nullable()->default('text');
            
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            
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
        Schema::dropIfExists('affecter_formateurs');
    }
}
