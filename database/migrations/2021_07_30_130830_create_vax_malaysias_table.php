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
        Schema::create('vax_malaysias', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('dose1_daily');
            $table->integer('dose2_daily');
            $table->integer('total_daily');
            $table->integer('dose1_cumul');
            $table->integer('dose2_cumul');
            $table->integer('total_cumul');
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
        Schema::dropIfExists('vax_malaysias');
    }
};
