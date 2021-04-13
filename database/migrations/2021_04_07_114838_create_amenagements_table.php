<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenagements', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('type_amenagement_id')->nullable()->default(12);
            
            $table->bigInteger('centre_formation_id')->nullable()->default(12);
            
            $table->string('superficieTotal', 100)->nullable()->default('text');
            
            $table->string('superficieEmbave', 100)->nullable()->default('text');
            
            $table->string('etats', 255)->nullable()->default('text');
            
            $table->foreign('type_amenagement_id')->references('id')->on('type_amenagements')->onDelete('cascade');
            
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
        Schema::dropIfExists('amenagements');
    }
}
