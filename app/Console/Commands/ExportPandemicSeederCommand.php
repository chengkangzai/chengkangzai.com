<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ExportPandemicSeederCommand extends Command
{
    protected $signature = 'export:pandemic';

    protected $description = 'Export Pandemic Database Seeder';

    public function handle(): int
    {
        $this->info('Exporting Covid Database Seeder...');
        //TODO : split it to multiple commands
        Artisan::call('iseed cases_malaysia,cases_states,clusters,deaths_malaysia,deaths_states,hospitals,icus,PKRC,populations,test_malaysia,test_states --classnameprefix=Covid --chunksize=500 --exclude=id');
        $this->info('Exporting Vax Database Seeder...');
        Artisan::call('iseed vax_malaysias,vax_reg_malaysias,vax_reg_states,vax_states --classnameprefix=Vax --chunksize=500 --exclude=id');

        $this->info('Export to Seeder Completed!');
        $this->info('Scanning for Seeder Files...');
        $files = scandir(database_path('seeders'));
        foreach ($files as $file) {
            $filename = basename($file);
            //get the file extension
            $extension = pathinfo($file, PATHINFO_EXTENSION);

            //check if classname prefix is Covid and extension is php
            if (str_contains($filename, 'Covid') && $extension == 'php') {
                $this->info('Found Covid Seeder File: ' . $filename);
                $content = file_get_contents(database_path('seeders') . '/' . $filename);
                $content = str_replace('namespace Database\Seeders;', 'namespace Database\Seeders\Covid;', $content);
                file_put_contents(database_path('seeders/Covid') . '/' . $filename, $content);
                unlink(database_path('seeders') . '/' . $filename);
                $this->info('Moved to Covid Seeder Folder: ' . $filename);
            }

            if (str_contains($filename, 'Vax') && $extension == 'php') {
                $this->info('Found Vax Seeder File: ' . $filename);
                $content = file_get_contents(database_path('seeders') . '/' . $filename);
                $content = str_replace('namespace Database\Seeders;', 'namespace Database\Seeders\Vax;', $content);
                file_put_contents(database_path('seeders/Vax') . '/' . $filename, $content);
                unlink(database_path('seeders') . '/' . $filename);
                $this->info('Moved to Vax Seeder Folder: ' . $filename);
            }
        }

        return self::SUCCESS;
    }
}
