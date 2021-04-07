<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauRecrutementCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveau_recrutement_centre_formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('niveau_recrutement_id')->default(12);
            
            $table->bigInteger('centre_formation_id')->default(12);
            
            
            $table->foreign('niveau_recrutement_id')->references('id')->on('niveau_recrutements')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('niveau_recrutement_centre_formations');
    }
}
