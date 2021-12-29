<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToDeathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deaths_malaysia', function (Blueprint $table) {
            $this->addNewColumn($table);
        });
        Schema::table('deaths_states', function (Blueprint $table) {
            $this->addNewColumn($table);
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
            $this->dropNewColumn($table);
        });
        Schema::table('deaths_states', function (Blueprint $table) {
            $this->dropNewColumn($table);
        });
    }

    private function addNewColumn(Blueprint $table): void
    {
        $table->integer('deaths_pvax')->after('deaths_bid_dod');
        $table->integer('deaths_fvax')->after('deaths_pvax');
        $table->integer('deaths_tat')->after('deaths_fvax')->comment('Turnaround Time : usual amount of time between the time a specimen is received within the laboratory and the result is available');
    }

    private function dropNewColumn(Blueprint $table): void
    {
        $table->dropColumn('deaths_pvax');
        $table->dropColumn('deaths_fvax');
        $table->dropColumn('deaths_tat');
    }
}
