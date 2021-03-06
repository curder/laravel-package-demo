<?php

namespace Curder\LaravelPackageDemo\Commands;

use Illuminate\Console\Command;

class LaravelPackageDemoCommand extends Command
{
    public $signature = 'laravel-package-demo';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
