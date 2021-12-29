<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vax_malaysias', function (Blueprint $table) {
            $this->dropOldCol($table);

            $this->addNewCol($table);
        });

        Schema::table('vax_states', function (Blueprint $table) {
            $this->dropOldCol($table);

            $this->addNewCol($table);
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
            $this->addOldCol($table);

            $this->dropNewCol($table);
        });
        Schema::table('vax_states', function (Blueprint $table) {
            $this->addOldCol($table);

            $this->dropNewCol($table);

        });
    }

    /**
     * @param Blueprint $table
     */
    public function dropNewCol(Blueprint $table): void
    {
        $table->dropColumn('daily_partial');
        $table->dropColumn('daily_full');
        $table->dropColumn('daily');
        $table->dropColumn('daily_partial_child');
        $table->dropColumn('daily_full_child');
        $table->dropColumn('cumul_partial');
        $table->dropColumn('cumul_full');
        $table->dropColumn('cumul');
        $table->dropColumn('cumul_partial_child');
        $table->dropColumn('cumul_full_child');
        $table->dropColumn('pfizer1');
        $table->dropColumn('pfizer2');
        $table->dropColumn('sinovac1');
        $table->dropColumn('sinovac2');
        $table->dropColumn('astra1');
        $table->dropColumn('astra2');
        $table->dropColumn('cansino');
        $table->dropColumn('pending');
    }

    /**
     * @param Blueprint $table
     */
    public function addNewCol(Blueprint $table): void
    {
        $table->integer('daily_partial');
        $table->integer('daily_full');
        $table->integer('daily');
        $table->integer('daily_partial_child');
        $table->integer('daily_full_child');
        $table->integer('cumul_partial');
        $table->integer('cumul_full');
        $table->integer('cumul');
        $table->integer('cumul_partial_child');
        $table->integer('cumul_full_child');
        $table->integer('pfizer1');
        $table->integer('pfizer2');
        $table->integer('sinovac1');
        $table->integer('sinovac2');
        $table->integer('astra1');
        $table->integer('astra2');
        $table->integer('cansino');
        $table->integer('pending');
    }

    /**
     * @param Blueprint $table
     */
    public function dropOldCol(Blueprint $table): void
    {
        $table->dropColumn('dose1_daily');
        $table->dropColumn('dose2_daily');
        $table->dropColumn('total_daily');
        $table->dropColumn('dose1_cumul');
        $table->dropColumn('dose2_cumul');
        $table->dropColumn('total_cumul');
    }

    /**
     * @param Blueprint $table
     */
    public function addOldCol(Blueprint $table): void
    {
        $table->integer('dose1_daily');
        $table->integer('dose2_daily');
        $table->integer('total_daily');
        $table->integer('dose1_cumul');
        $table->integer('dose2_cumul');
        $table->integer('total_cumul');
    }
};
