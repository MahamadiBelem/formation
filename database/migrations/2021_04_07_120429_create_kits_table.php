<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitsTable extends Migration
{
    /**
     * Run the migrations. This migrations is equivalent to TypeKit
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('kits', function (Blueprint $table) {
           
           $table->bigIncrements('id');
           $table->string('libelleKits', 255)->nullable()->default('text');
           $table->integer('quantites')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('kits');
    }
}
