<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class IdeHelperCommand extends Command
{
    protected $signature = 'app:ide-helper';

    protected $description = 'Ide helper command for local environment.';

    public function handle(): void
    {
        /**
         *   "@php artisan ide-helper:generate",
         *   "@php artisan ide-helper:meta"
         */
        if (App::isLocal()) {
            $this->call('ide-helper:generate');
            $this->call('ide-helper:meta');
        }
    }
}
