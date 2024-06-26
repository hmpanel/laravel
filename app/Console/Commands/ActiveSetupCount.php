<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ActiveSetupCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hmpanel:activesetupcount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Active Setup Count';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        sleep(rand(0, 9));

        // Useful to daily count how many HmPanel Control Panel installations are active
        // around the world and show the total value into hmpanel.sh official website
        try {
            file_get_contents(config('hmpanel.activesetupcount'));
        } catch (\Throwable $th) {
            //
        }

        return 0;
    }
}
