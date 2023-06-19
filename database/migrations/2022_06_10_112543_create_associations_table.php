<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('commune_id')->default(12);
            $table->bigInteger('activiteorgane_id')->default(12);
            $table->bigInteger('type_organisation_id')->default(12);


            $table->string('denomination', 100)->unique()->default('text');
            $table->string('nroRecepisse',100)->nullable()->default('text');
            $table->date('dateCreation')->nullable();
            $table->integer('dureeVie')->nullable()->default(12);
            $table->string('telephone', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->string('coordonnegpslong', 100)->nullable()->default('text');
            $table->string('coordonnegpslat', 100)->nullable()->default('text');
            $table->string('siteWeb', 100)->nullable()->default('text');
            $table->string('couvertureFonctionnelle', 100)->nullable()->default('text');
            $table->string('genre', 100)->nullable()->default('text');
            $table->integer('nbreMembreH')->nullable()->default(12);
            $table->integer('nbreMembreF')->nullable()->default(12);
            $table->integer('nbreUnion')->nullable()->default(12);


            $table->foreign('activiteorgane_id')->references('id')->on('activiteorganes')->onDelete('cascade');
            $table->foreign('type_organisation_id')->references('id')->on('type_organisations')->onDelete('cascade');
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');

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
        Schema::dropIfExists('associations');
    }
}
