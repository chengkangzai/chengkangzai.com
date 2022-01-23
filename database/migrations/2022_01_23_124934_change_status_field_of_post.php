<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        DB::table('posts')->where('status', '=', 'published')->update(['status' => 'PUBLISHED']);
        DB::table('posts')->where('status', '=', 'draft')->update(['status' => 'DRAFT']);
    }

    public function down()
    {
    }
};
