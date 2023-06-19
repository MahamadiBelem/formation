<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissariataucompteassociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissariataucompteassociations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('association_id')->default(12);
            
            $table->integer('nbreMembreH')->nullable()->default(12);
            $table->integer('nbreMembreM')->nullable()->default(12);
            $table->date('debutMandat')->nullable();
            $table->date('finMandat')->nullable();
            $table->integer('nbreMandatConsecuti')->nullable()->default(12);
            $table->string('nomPrenomRapporteur', 50)->nullable()->default('text');
            $table->string('contactRapporteur', 50)->nullable()->default('text');
            $table->string('sexeRapporteur', 12)->nullable()->default('text');

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
        Schema::dropIfExists('commissariataucompteassociations');
    }
}
