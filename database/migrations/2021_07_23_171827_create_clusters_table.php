<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->id();
            $table->string('cluster');
            $table->string('state');
            $table->longText('district');
            $table->date('date_announced')->nullable();
            $table->date('date_last_onset')->nullable();
            $table->string('category');
            $table->string('status');
            $table->integer('cases_new');
            $table->integer('cases_total');
            $table->integer('cases_active');
            $table->integer('tests');
            $table->integer('icu');
            $table->integer('deaths');
            $table->integer('recovered');
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
        Schema::dropIfExists('clusters');
    }
}
