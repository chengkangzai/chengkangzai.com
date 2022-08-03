<?php

use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        $addVaxColumn = function (Blueprint $table) {
            $table->integer('daily_booster2');
            $table->integer('daily_booster_adol');
            $table->integer('daily_booster2_adol');
            $table->integer('daily_booster_child');
            $table->integer('daily_booster2_child');
            $table->integer('cumul_booster2');
            $table->integer('cumul_booster_adol');
            $table->integer('cumul_booster2_adol');
            $table->integer('cumul_booster_child');
            $table->integer('cumul_booster2_child');
            $table->integer('pfizer4');
            $table->integer('sinovac4');
            $table->integer('astra4');
            $table->integer('sinopharm4');
            $table->integer('cansino4');
            $table->integer('pending4');

        };
        Schema::table((new VaxState())->getTable(), $addVaxColumn);
        Schema::table((new VaxMalaysia())->getTable(), $addVaxColumn);

        Schema::table((new VaxRegState())->getTable(), function (Blueprint $table) {
            $table->integer('children_solo');
            $table->integer('adolescents');
        });

        Schema::table((new VaxRegMalaysia())->getTable(), function (Blueprint $table) {
            $table->integer('children_solo');
            $table->integer('adolescents');
        });
    }

    public function down()
    {
        $dropVaxColumn = function (Blueprint $table) {
            $table->dropColumn('daily_booster2');
            $table->dropColumn('daily_booster_adol');
            $table->dropColumn('daily_booster2_adol');
            $table->dropColumn('daily_booster_child');
            $table->dropColumn('daily_booster2_child');
            $table->dropColumn('cumul_booster2');
            $table->dropColumn('cumul_booster_adol');
            $table->dropColumn('cumul_booster2_adol');
            $table->dropColumn('cumul_booster_child');
            $table->dropColumn('cumul_booster2_child');
            $table->dropColumn('pfizer4');
            $table->dropColumn('sinovac4');
            $table->dropColumn('astra4');
            $table->dropColumn('sinopharm4');
            $table->dropColumn('cansino4');
            $table->dropColumn('pending4');
        };

        Schema::table((new VaxState())->getTable(), $dropVaxColumn);
        Schema::table((new VaxMalaysia())->getTable(), $dropVaxColumn);

        Schema::table((new VaxRegState())->getTable(), function (Blueprint $table) {
            $table->dropColumn('children_solo');
            $table->dropColumn('adolescents');
        });

        Schema::table((new VaxRegMalaysia())->getTable(), function (Blueprint $table) {
            $table->dropColumn('children_solo');
            $table->dropColumn('adolescents');
        });
    }
};
