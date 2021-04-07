<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialiteCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialite_centre_formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('specialite_id')->nullable()->default(12);
            
            $table->bigInteger('centre_formation_id')->nullable()->default(12);
            
            
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');
            
            
            $table->foreign('centre_formation_id')->references('id')->on('centre_formations')->onDelete('cascade');
            
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
        Schema::dropIfExists('specialite_centre_formations');
    }
}
