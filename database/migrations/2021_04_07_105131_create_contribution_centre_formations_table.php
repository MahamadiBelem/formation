<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribution_centre_formations', function (Blueprint $table) {
           
           $table->bigIncrements('id');
           
           $table->bigInteger('contribution_id')->default(12);
           
           $table->bigInteger('centre_formation_id')->default(12);
           
           
           $table->foreign('contribution_id')->references('id')->on('contributions')->onDelete('cascade');
           
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
        Schema::dropIfExists('contribution_centre_formations');
    }
}
