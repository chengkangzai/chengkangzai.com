<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToICUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('icus', function (Blueprint $table) {
            $table->integer('vent_used')->after('vent_noncovid');
            $table->integer('vent_port_used')->after('vent_used');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('icus', function (Blueprint $table) {
            $table->dropColumn('vent_used');
            $table->dropColumn('vent_port_used');
        });
    }
}
