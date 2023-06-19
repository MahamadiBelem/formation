<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBureauexecutifassociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bureauexecutifassociations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('association_id')->default(12);

            $table->integer('nbreMembreH')->nullable()->default(12);
            $table->integer('nbreMembreM')->nullable()->default(12);
            $table->date('debutMandat')->nullable();
            $table->date('finMandat')->nullable();
            $table->string('nomPrenomPresident', 50)->nullable()->default('text');
            $table->string('contactPresident', 50)->nullable()->default('text');
            $table->string('sexePresident', 20)->nullable()->default('text');


            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');

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
        Schema::dropIfExists('bureauexecutifassociations');
    }
}
