<?php

use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        $this->addCol((new VaxState())->getTable());
        $this->addCol((new VaxMalaysia())->getTable());
    }

    public function down()
    {
        $this->dropCol((new VaxState())->getTable());
        $this->dropCol((new VaxMalaysia())->getTable());
    }

    private function addCol(string $tableName): void
    {
        Schema::table($tableName, function (Blueprint $table) {
            $table->integer('daily_partial_adol')->after('daily')->nullable();
            $table->integer('daily_full_adol')->after('daily_partial_adol')->nullable();

            $table->integer('cumul_partial_adol')->after('cumul')->nullable();
            $table->integer('cumul_full_adol')->after('cumul_partial_adol')->nullable();
        });
    }

    private function dropCol(string $tableName): void
    {
        Schema::table($tableName, function (Blueprint $table) {
            $table->dropColumn('daily_partial_adol');
            $table->dropColumn('daily_full_adol');
            $table->dropColumn('cumul_partial_adol');
            $table->dropColumn('cumul_full_adol');
        });
    }
};
