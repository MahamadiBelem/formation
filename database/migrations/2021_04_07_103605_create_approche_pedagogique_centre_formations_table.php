<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprochePedagogiqueCentreFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approche_pedagogique_centre_formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('approche_pedagogique_id')->default(12);
            
            $table->bigInteger('centre_formation_id')->default(12);
        
            $table->foreign('approche_pedagogique_id')->references('id')->on('approche_pedagogiques')->onDelete('cascade');
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
        Schema::dropIfExists('approche_pedagogique_centre_formations');
    }
}
