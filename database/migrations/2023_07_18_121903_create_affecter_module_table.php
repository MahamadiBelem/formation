<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_module', function (Blueprint $table) {
            $table->id();
            $table->string('discipline')->default(12);

            $table->bigInteger('type_formation_id')->default(12);
            $table->foreign('type_formation_id')->references('id')->on('type_formations')->onDelete('cascade');
           
            $table->bigInteger('formateur_id')->nullable()->default(12);
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');

            $table->bigInteger('module_id')->nullable()->default(12);
            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');

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
        Schema::dropIfExists('affecter_module');
    }
}
