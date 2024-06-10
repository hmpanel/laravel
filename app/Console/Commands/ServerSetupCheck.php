<?php

namespace App\Console\Commands;

use App\Models\Server;
use phpseclib3\Net\SSH2;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ServerSetupCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'servers:setupcheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Servers Setup';

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
        $servers = Server::where('status', 0)->get();

        foreach ($servers as $server) {

            $server->build  = 202112181;
            $server->status = 1;
            $server->save();
        }

        return 0;
    }
}
