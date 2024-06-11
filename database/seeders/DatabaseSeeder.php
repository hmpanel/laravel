<?php

namespace Database\Seeders;

use App\Models\Auth;
use App\Models\Server;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Auth::query()->truncate();

        Auth::create([
            'username' => config('hmpanel.username'),
            'password' => Hash::make(config('hmpanel.password')),
            'apikey' => Str::random(48)
        ]);

        Server::create([
            'server_id' => strtolower('HMPANELSERVERID'),
            'name' => 'This VPS!',
            'ip' => 'HMPANELIP',
            'password' => strtolower('HMPANELPASS'),
            'database' => strtolower('HMPANELDB'),
            'default' => 1,
            'cron' => ' '
        ]);

        return true;
    }
}
