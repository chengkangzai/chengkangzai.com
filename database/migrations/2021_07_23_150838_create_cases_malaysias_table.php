<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesMalaysiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases_malaysia', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('cases_new');
            $table->integer('cluster_import');
            $table->integer('cluster_religious');
            $table->integer('cluster_community');
            $table->integer('cluster_highRisk');
            $table->integer('cluster_education');
            $table->integer('cluster_detentionCentre');
            $table->integer('cluster_workplace');
            $table->integer('cases_cumulative')->nullable();
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
        Schema::dropIfExists('cases_malaysia');
    }
}
