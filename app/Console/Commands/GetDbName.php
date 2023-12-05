<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\support\Facades\Db;

class GetDbName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:get_db_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get the current database name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbname = Db::connection()->getdatabasename();
       $this->info("The current db name is  $dbname");
    }
}
