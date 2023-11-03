<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('source_financement_id')->nullable()->default(12);
            $table->foreign('source_financement_id')->references('id')->on('source_financements')->onDelete('cascade');
 
            $table->bigInteger('apprenant_id')->default(12);
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
 
            $table->bigInteger('kit_id')->default(12);
            $table->foreign('kit_id')->references('id')->on('kits')->onDelete('cascade');
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
        Schema::dropIfExists('affectation');
    }
}
