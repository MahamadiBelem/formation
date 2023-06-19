<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariatexecutifassociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretariatexecutifassociations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('association_id')->default(12);

            $table->string('annee', 10)->nullable()->default('text');
            $table->string('nomPrenomSP', 50)->nullable()->default('text');
            $table->string('contactSP', 25)->nullable()->default('text');
            $table->integer('nbreSalairePH')->nullable()->default(12);
            $table->integer('nbreSalairePF')->nullable()->default(12);

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
        Schema::dropIfExists('secretariatexecutifassociations');
    }
}
