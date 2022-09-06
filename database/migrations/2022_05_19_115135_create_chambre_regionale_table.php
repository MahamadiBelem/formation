<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambreRegionaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambre_regionale', function (Blueprint $table) {
            $table->bigIncrements('id');
            
//          $table->bigInteger('commune_id')->unsigned();


            $table->string('libelleCRA', 100)->unique()->default('text');
            $table->integer('telephone')->nullable()->default(15);
            $table->string('email', 100)->nullable()->default('text');
            $table->string('boitepostal', 100)->nullable()->default('text');
            $table->string('gpslongitude', 100)->nullable()->default('text');
            $table->string('gpslatitude', 100)->nullable()->default('text');
            $table->string('siteWeb', 100)->nullable()->default('text');

//          $table->foreign('commune_id')->references('id')->on('communes');

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
        Schema::dropIfExists('chambre_regionale');
    }
}
