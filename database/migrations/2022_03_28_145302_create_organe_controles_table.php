<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganeControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organe_controles', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('cooperative_id')->default(12);

            $table->integer('nombreMenbreHomme')->nullable()->default(12);
            $table->integer('nombreMenbreFemmme')->nullable()->default(12);

            $table->date('dateDebutMandat')->nullable();
            $table->date('dateFinMandat')->nullable();
            $table->integer('nombreMandatConsecutif')->nullable()->default(12);

            $table->string('nomPrenomPremierResponsable', 100)->nullable()->default('text');
            $table->string('contactPremierResponsable', 100)->nullable()->default('text');
            $table->string('sexePremierResponsable', 100)->nullable()->default('text');

            $table->foreign('cooperative_id')->references('id')->on('cooperatives')->onDelete('cascade');
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
        Schema::dropIfExists('organe_controles');
    }
}
