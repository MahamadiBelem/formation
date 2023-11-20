<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AffecterModuleModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter_module_module', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->bigInteger('affecter_module_id')->default(12);
            
            $table->bigInteger('module_id')->default(12);
        
            $table->foreign('affecter_module_id')->references('id')->on('affecter_module')->onDelete('cascade');
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
        //
    }
}
