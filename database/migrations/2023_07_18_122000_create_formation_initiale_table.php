<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationInitialeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_initiale', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('source_financement_id')->nullable()->default(12);
            $table->foreign('source_financement_id')->references('id')->on('source_financements')->onDelete('cascade');
            
            $table->bigInteger('type_formation_id')->default(12);
            $table->foreign('type_formation_id')->references('id')->on('type_formations')->onDelete('cascade');

            $table->string('libelleFormations', 255)->nullable()->default('text');
            $table->string('coutFormation', 100)->nullable()->default('text');
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
        Schema::dropIfExists('formation_initiale');
    }
}
