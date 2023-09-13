<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class EveryMinutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean the database table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        DB::table('task')->delete();
        echo "Operation done";
    }
}
