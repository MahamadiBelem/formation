<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsfrascturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insfrasctures', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('type_infrastructure_id')->nullable()->default(12);
            
            $table->bigInteger('centre_formation_id')->nullable()->default(12);
            
            $table->date('dateElaboration');
            $table->string('fonctionalites', 255)->nullable()->default('text');
            $table->string('etat', 100)->nullable()->default('text');

            $table->foreign('type_infrastructure_id')->references('id')->on('type_infrastructures')->onDelete('cascade');

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
        Schema::dropIfExists('insfrasctures');
    }
}
