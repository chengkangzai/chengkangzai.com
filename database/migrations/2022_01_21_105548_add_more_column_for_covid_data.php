<?php

use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\DeathsState;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        $this->addCaseColumn((new CasesMalaysia())->getTable());
        $this->addCaseColumn((new CasesState())->getTable());

        $this->addDeathColumn((new DeathsState())->getTable());
        $this->addDeathColumn((new DeathsMalaysia())->getTable());

        Schema::table((new Cluster())->getTable(), function (Blueprint $table) {
            $table->text('summary_bm')->after('recovered')->nullable();
            $table->text('summary_en')->after('summary_bm')->nullable();
        });

        $this->addVaxColumn((new VaxMalaysia())->getTable());
        $this->addVaxColumn((new VaxState())->getTable());
    }

    public function down()
    {
    }

    private function addCaseColumn(string $tableName): void
    {
        Schema::table($tableName, function (Blueprint $table) {
            $table->integer('cases_unvax')->after('cases_cluster')->default(0);
            $table->integer('cases_boost')->after('cases_fvax')->default(0);
            $table->integer('cases_0_4')->after('cases_elderly')->default(0);
            $table->integer('cases_5_11')->after('cases_0_4')->default(0);
            $table->integer('cases_12_17')->after('cases_5_11')->default(0);
            $table->integer('cases_18_29')->after('cases_12_17')->default(0);
            $table->integer('cases_30_59')->after('cases_18_29')->default(0);
            $table->integer('cases_60_69')->after('cases_30_59')->default(0);
            $table->integer('cases_70_79')->after('cases_60_69')->default(0);
            $table->integer('cases_80')->after('cases_70_79')->default(0);
        });
    }

    private function addDeathColumn(string $tableName): void
    {
        Schema::table($tableName, function (Blueprint $table) {
            $table->integer('deaths_new_dod')->after('deaths_bid');
            $table->integer('deaths_unvax')->after('deaths_bid_dod');
            $table->integer('deaths_boost')->after('deaths_fvax');

        });
    }

    private function addVaxColumn(string $tableName): void
    {
        Schema::table($tableName, function (Blueprint $table) {
            $table->renameColumn('pending', 'pending1');
        });

        Schema::table($tableName, function (Blueprint $table) {
            $table->integer('pfizer3')->after('pfizer2')->nullable();
            $table->integer('sinovac3')->after('sinovac2')->nullable();
            $table->integer('astra3')->after('astra2')->nullable();
            $table->integer('sinopharm1')->after('astra3');
            $table->integer('sinopharm2')->after('sinopharm1');
            $table->integer('sinopharm3')->after('sinopharm2');
            $table->integer('cansino3')->after('cansino');
            $table->integer('pending2')->after('pending1');
            $table->integer('pending3')->after('pending2');
        });
    }
};
