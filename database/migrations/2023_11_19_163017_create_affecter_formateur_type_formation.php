<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterFormateurTypeFormation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_formateur_type_formation', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('affecter_formateur_id')->default(12);
            
            $table->bigInteger('type_formation_id')->default(12);
        
            $table->foreign('affecter_formateur_id')->references('id')->on('affecter_formateurs')->onDelete('cascade');
            $table->foreign('type_formation_id')->references('id')->on('type_formations')->onDelete('cascade');
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
        Schema::dropIfExists('affecter_formateur_type_formation');
    }
}
