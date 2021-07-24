<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');
            $table->integer('beds');
            $table->integer('beds_noncrit')->comment('Non Critical Beds');
            $table->integer('admitted_pui');
            $table->integer('admitted_covid');
            $table->integer('admitted_total');
            $table->integer('discharged_pui');
            $table->integer('discharged_covid');
            $table->integer('discharged_total');
            $table->integer('hosp_covid');
            $table->integer('hosp_pui');
            $table->integer('hosp_noncovid');
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
        Schema::dropIfExists('hospitals');
    }
}
