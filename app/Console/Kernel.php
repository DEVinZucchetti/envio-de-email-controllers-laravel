<?php

namespace App\Console;

use App\Console\Commands\SendTopGameEmailToUsers;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\SendTopGameEmailToUsers::class,
    ];


    protected function schedule(Schedule $schedule)
    {
        $schedule->command('app:send-top-game-email-to-users')->dailyAt('20:00')->timezone('America/Guayaquil');
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}


