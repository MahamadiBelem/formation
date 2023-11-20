<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeFormationsTable extends Migration
{
    /**
     * Run the migrations.   This equivalent to CYCLE FORMATION
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_formations', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('libelleTypeFormation', 255)->nullable()->default('text');
            //MAJ
            //$table->bigInteger('module_id')->default(12);
           // $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
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
        Schema::dropIfExists('type_formations');
    }
}
