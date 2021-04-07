<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainesInstallationKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domaines_installation_kits', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('domaines_installation_id')->nullable()->default(12);
            
            $table->bigInteger('kit_id')->nullable()->default(12);
            
            $table->foreign('domaines_installation_id')->references('id')->on('domaines_installations')->onDelete('cascade');
            
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
        Schema::dropIfExists('domaines_installation_kits');
    }
}
