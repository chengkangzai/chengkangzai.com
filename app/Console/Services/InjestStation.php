<?php

namespace App\Console\Services;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class InjestStation
{
    private Command $console;
    public function __construct(Command $command)
    {
        $this->console = $command;
    }

    public function inject(?Collection $records, string $modelName): void
    {
        if (!$records) {
            $this->console->info("[$modelName] : Not inject as the hash value is the same");
            return;
        }
        if (DB::table((new $modelName)->getTable())->count() == $records->count()) {
            $this->console->info("[$modelName] : Not inject as the data is the same.");
            return;
        }

        // get the table mapped to the model and truncate all data
        DB::table((new $modelName)->getTable())->truncate();

        $records
            ->chunk(500)  // 500 item per sub collection database brevity
            ->tap(function ($chunks) use ($modelName) {
                $this->console->info("[$modelName] : Injecting...");
                $this->console->getOutput()->progressStart($chunks->count());
            })
            ->each(function ($chunk) use ($modelName) { // for each sub collection
                DB::table((new $modelName)->getTable())->insert($chunk->toArray());
                $this->console->getOutput()->progressAdvance();
            })
            ->tap(function () {
                $this->console->getOutput()->progressFinish();
            });
    }

    public function truncate(array $models)
    {
        $this->console->info("Truncating...");
        $this->console->getOutput()->progressStart(count($models));

        foreach ($models as $model) {
            $tableName = (new $model)->getTable();
            DB::table($tableName)->truncate();
            $this->console->getOutput()->progressAdvance();
        }

        $this->console->getOutput()->progressFinish();
    }
}
