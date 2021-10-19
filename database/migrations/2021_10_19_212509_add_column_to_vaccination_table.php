<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToVaccinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vax_malaysias', function (Blueprint $table) {
            $table->integer('daily_booster')->after('daily_full_child');
            $table->integer('cumul_booster')->after('cumul_full_child');
        });

        Schema::table('vax_states', function (Blueprint $table) {
            $table->integer('daily_booster')->after('daily_full_child');
            $table->integer('cumul_booster')->after('cumul_full_child');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vax_malaysias', function (Blueprint $table) {
            $table->dropColumn('daily_booster');
            $table->dropColumn('cumul_booster');
        });

        Schema::table('vax_states', function (Blueprint $table) {
            $table->dropColumn('daily_booster');
            $table->dropColumn('cumul_booster');
        });
    }
}
