<?php

namespace KaanAtalay\LaravelProjectInfo\Commands;

use Illuminate\Console\Command;

class LaravelProjectInfoCommand extends Command
{
    public $signature = 'laravel-project-info';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
