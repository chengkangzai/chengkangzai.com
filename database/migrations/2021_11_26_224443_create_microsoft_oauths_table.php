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
            $table->string('accessToken');
            $table->string('refreshToken');
            $table->string('tokenExpires');
            $table->string('userName');
            $table->string('userEmail');
            $table->string('userTimeZone');
            $table->foreignId('userId')->constrained();
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
