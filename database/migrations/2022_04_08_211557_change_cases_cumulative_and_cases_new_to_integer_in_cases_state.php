<?php

use App\Models\Covid\CasesState;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table((new CasesState())->getTable(), function (Blueprint $table) {
            $table->dropColumn('cases_new');
            $table->dropColumn('cases_cumulative');
        });
        Schema::table((new CasesState())->getTable(), function (Blueprint $table) {
            $table->integer('cases_new')->after('state');
            $table->integer('cases_cumulative')->after('cases_recovered_cumulative');
        });
    }
};
