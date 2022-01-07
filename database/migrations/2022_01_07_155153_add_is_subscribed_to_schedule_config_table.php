<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsSubscribedToScheduleConfigTable extends Migration
{
    public function up()
    {
        Schema::table('schedule_configs', function (Blueprint $table) {
            $table->boolean('is_subscribed')->default(false)->after('emails');
        });
    }

    public function down()
    {
        Schema::table('schedule_configs', function (Blueprint $table) {
            $table->dropColumn('is_subscribed');
        });
    }
}
