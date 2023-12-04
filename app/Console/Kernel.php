<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */

    protected $commnads = [
        SendGameTerrorEmail::class
    ];

    protected function schedule(Schedule $schedule): void
    {

        $schedule->command('app:send-email-games-terror')
            ->timezone('America/Sao_Paulo')
            ->everyMinute();
    }


    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
