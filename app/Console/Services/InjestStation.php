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
        $tableName = (new $modelName)->getTable();

        $model = (new \ReflectionClass($modelName))->getShortName();
        if (!$records) {
            $this->console->info("[$model] : Not inject as the hash value is the same");
            return;
        }

        if (DB::table($tableName)->count() == $records->count()) {
            $this->console->info("[$model] : Not inject as the data is the same.");
            return;
        }

        DB::table($tableName)->truncate();

        $this->console->info("[$model] : Injecting...");

        $chunks = $records->chunk(500);

        $this->console->getOutput()->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table($tableName)->insert($chunk->toArray());
            $this->console->getOutput()->progressAdvance();
        }

        $this->console->getOutput()->progressFinish();
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
