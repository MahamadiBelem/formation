<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionnementassociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnementassociations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('association_id')->default(12);
            $table->integer('nbreAssembleeGeneralesOrdinairePrevu')->nullable()->default(12);
            $table->integer('nbreRencontreOrganeGestion')->nullable()->default(12);
            $table->integer('nbreRencontreOrganeSurveillance')->nullable()->default(12);

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
        Schema::dropIfExists('fonctionnementassociations');
    }
}
