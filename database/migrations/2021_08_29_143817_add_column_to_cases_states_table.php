<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCasesStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cases_states', function (Blueprint $table) {
            $table->integer('cases_import')->after('cases_new');
            $table->integer('cases_recovered')->after('cases_import');
            $table->integer('cases_recovered_cumulative')->after('cases_recovered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cases_states', function (Blueprint $table) {
            $table->removeColumn('cases_import');
            $table->removeColumn('cases_recovered');
            $table->removeColumn('cases_recovered_cumulative');
        });
    }
}
