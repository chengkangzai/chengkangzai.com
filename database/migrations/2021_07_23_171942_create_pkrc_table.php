<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PKRC', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');
            $table->integer('beds');
            $table->integer('admitted_pui')->comment('pui mean Patient under investigation');;
            $table->integer('admitted_covid');
            $table->integer('admitted_total');
            $table->integer('discharge_pui')->comment('pui mean Patient under investigation');;
            $table->integer('discharge_covid');
            $table->integer('discharge_total');
            $table->integer('pkrc_covid');
            $table->integer('pkrc_pui');
            $table->integer('pkrc_noncovid');

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
        Schema::dropIfExists('PKRC');
    }
};
