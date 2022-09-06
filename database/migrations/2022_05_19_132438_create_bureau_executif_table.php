<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBureauExecutifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bureau_executif', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('chambre_regionale_id')->default(12);

            $table->string('NomPrenomPresident', 100)->nullable()->default('text');
            $table->integer('Contact')->nullable()->default(12);
            $table->integer('NbreMembreAssembleConsulaireH')->nullable()->default(12);
            $table->integer('NbreMembreAssembleConsulaireF')->nullable()->default(12);
            $table->integer('DureeMandat')->nullable()->default(12);
            $table->date('DateDebutMandat')->nullable();

            $table->foreign('chambre_regionale_id')->references('id')->on('chambre_regionale')->onDelete('cascade');

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
        Schema::dropIfExists('bureau_executif');
    }
}
