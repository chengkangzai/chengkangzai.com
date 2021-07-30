<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaxRegStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vax_reg_states', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');
            $table->integer('total');
            $table->integer('phase2');
            $table->integer('mysj');
            $table->integer('call');
            $table->integer('web');
            $table->integer('children');
            $table->integer('elderly');
            $table->integer('comorb');
            $table->integer('oku');
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
        Schema::dropIfExists('vax_reg_states');
    }
}
