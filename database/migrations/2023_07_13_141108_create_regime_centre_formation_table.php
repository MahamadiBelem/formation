<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimeCentreFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regime_centre_formation', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('regime_id')->default(12);
            
            $table->bigInteger('centre_formation_id')->default(12);
            
            
            $table->foreign('regime_id')->references('id')->on('regime')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('regime_centre_formation');
    }
}
