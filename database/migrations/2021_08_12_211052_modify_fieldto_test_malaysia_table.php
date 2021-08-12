<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyFieldtoTestMalaysiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_malaysia', function (Blueprint $table) {
            $table->renameColumn('`rtk-ag`', 'rtk_ag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_malaysia', function (Blueprint $table) {
            $table->renameColumn('rtk_ag', '`rtk-ag`');
        });
    }
}
