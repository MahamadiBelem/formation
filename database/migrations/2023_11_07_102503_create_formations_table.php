<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('type_formation_id')->default(12);
            
            
            $table->bigInteger('source_financement_id')->nullable()->default(12);
            
            
            $table->foreign('source_financement_id')->references('id')->on('source_financements')->onDelete('cascade');
            
            $table->string('test', 255)->nullable()->default('text');
            $table->string('themes', 255)->nullable()->default('text');
            $table->string('libelleFormations', 255)->nullable()->default('text');
            $table->string('coutFormation', 100)->nullable()->default('text');
            
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
        Schema::dropIfExists('formations');
    }
}
