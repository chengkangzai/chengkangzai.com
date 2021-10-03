<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCasesStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cases_states', function (Blueprint $table) {
            $this->addNewColumn($table);
        });

        Schema::table('cases_malaysia', function (Blueprint $table) {
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
        Schema::table('cases_states', function (Blueprint $table) {
            $this->dropNewColumn($table);
        });

        Schema::table('cases_malaysia', function (Blueprint $table) {
            $this->dropNewColumn($table);
        });
    }

    private function addNewColumn(Blueprint $table): void
    {
        $table->integer('cases_active')->after('cases_cumulative');
        $table->integer('cases_cluster')->after('cases_active');
        $table->integer('cases_pvax')->after('cases_cluster');
        $table->integer('cases_fvax')->after('cases_pvax');
        $table->integer('cases_child')->after('cases_fvax');
        $table->integer('cases_adolescent')->after('cases_child');
        $table->integer('cases_adult')->after('cases_adolescent');
        $table->integer('cases_elderly')->after('cases_adult');
    }

    private function dropNewColumn(Blueprint $table): void
    {
        $table->dropColumn('cases_active');
        $table->dropColumn('cases_cluster');
        $table->dropColumn('cases_pvax');
        $table->dropColumn('cases_fvax');
        $table->dropColumn('cases_child');
        $table->dropColumn('cases_adolescent');
        $table->dropColumn('cases_adult');
        $table->dropColumn('cases_elderly');
    }
}
