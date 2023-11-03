<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fin_formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('affecter_apprenant_id')->nullable()->default(12);
            
            $table->date('dateFinFormation')->nullable();
            // Mise a jour with add of a new colum 
            $table->date('dateInscription')->nullable(); 

            $table->string('anneesFinFormation', 100)->nullable()->default('text');
            $table->string('motif', 100)->nullable()->default('text');
            $table->boolean('confirmedSortie')->nullable()->default(false);
            $table->foreign('affecter_apprenant_id')->references('id')->on('affecter_apprenants')->onDelete('cascade');
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
        Schema::dropIfExists('fin_formations');
    }
}
