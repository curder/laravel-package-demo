<?php

namespace Curder\LaravelPackageDemo\Commands;

use Illuminate\Console\Command;

class LaravelPackageDemoCommand extends Command
{
    public $signature = 'laravel-package-demo';

    public $description = 'My command';

    public function handle()
    {
        $output_text = config('package-demo.command_output_text');

        $this->comment($output_text);
    }
}
