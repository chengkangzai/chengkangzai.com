<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        //get all the models under the app/Models/Covid folder
        collect(File::allFiles(app_path('Models/Covid')))
            ->map(function ($file) {
                $namespace = 'App\\Models\\Covid\\' . $file->getBasename('.php');
                /** @var Model $model */
                $model = new $namespace;
                return $model->getTable();
            })
            ->each(function ($tableName) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->dropColumn('create_at');
                    $table->dropColumn('update_at');
                });
            })
            ->each(function ($tableName) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->timestamp('created_at')->useCurrent();
                    $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
                });
            });


    }

    public function down()
    {
    }
};
