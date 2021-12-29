<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrosoftOauthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microsoft_oauths', function (Blueprint $table) {
            $table->id();
            $table->text('accessToken');
            $table->text('refreshToken');
            $table->text('tokenExpires');
            $table->string('userName');
            $table->string('userEmail');
            $table->string('userTimeZone');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microsoft_oauths');
    }
}
