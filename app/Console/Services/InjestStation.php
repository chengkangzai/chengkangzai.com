<?php

namespace App\Console\Services;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class InjestStation
{
    private Command $console;

    public function __construct(Command $command)
    {
        $this->console = $command;
    }

    public function inject(?Collection $records, string $modelName): void
    {
        /** @var Model $modelName */
        // get the table mapped to the model and truncate all data
        $modelName::truncate();

        $records
            ->chunk(500)  // 500 item per sub collection database brevity
            ->tap(function ($chunks) use ($modelName) {
                $this->console->info("[$modelName] : Injecting...");
                $this->console->getOutput()->progressStart($chunks->count());
            })
            ->each(function ($chunk) use ($modelName) { // for each sub collection
                $modelName::insert($chunk->toArray());
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

        /** @var Model $model */
        foreach ($models as $model) {
            $model::truncate();
            $this->console->getOutput()->progressAdvance();
        }

        $this->console->getOutput()->progressFinish();
    }

    public function shouldUpdate(?Collection $records, string $modelName): bool
    {
        /** @var Model $modelName */
        if (! $records) {
            $this->console->info("[$modelName] : Not inject as the hash value is the same");

            return false;
        }
        if ($modelName::count() == $records->count()) {
            $this->console->info("[$modelName] : Not inject as the data is the same.");

            return false;
        }

        return true;
    }
}
