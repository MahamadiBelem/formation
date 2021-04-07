<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicCibleCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_cible_centre_formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('public_cible_id')->default(12);
            
            $table->bigInteger('centre_formation_id')->default(12);
            
            $table->foreign('public_cible_id')->references('id')->on('public_cibles')->onDelete('cascade');
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
        Schema::dropIfExists('public_cible_centre_formations');
    }
}
