<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icus', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');

            $table->integer('bed_icu');
            $table->integer('bed_icu_rep');
            $table->integer('bed_icu_total');
            $table->integer('bed_icu_covid');

            $table->integer('vent');
            $table->integer('vent_port');

            $table->integer('icu_covid');
            $table->integer('icu_pui');
            $table->integer('icu_noncovid');

            $table->integer('vent_covid');
            $table->integer('vent_pui');
            $table->integer('vent_noncovid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icus');
    }
};
