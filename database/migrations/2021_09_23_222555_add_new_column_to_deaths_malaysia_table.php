<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToDeathsMalaysiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deaths_malaysia', function (Blueprint $table) {
            $table->integer('deaths_bid_dod')->after('deaths_bid')->comment('Brought in Death that died of disease');
            $table->integer('deaths_bid_dod_cumulative')->after('deaths_bid_dod');
        });
        Schema::table('deaths_states', function (Blueprint $table) {
            $table->integer('deaths_bid_dod')->after('deaths_bid')->comment('Brought in Death that died of disease');
            $table->integer('deaths_bid_dod_cumulative')->after('deaths_bid_dod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deaths_malaysia', function (Blueprint $table) {
            $table->dropColumn('deaths_bid_dod');
            $table->dropColumn('deaths_bid_dod_cumulative');
        });
        Schema::table('deaths_states', function (Blueprint $table) {
            $table->dropColumn('deaths_bid_dod');
            $table->dropColumn('deaths_bid_dod_cumulative');
        });
    }
}
