<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commnads = [
        SendEmailJogos::class
    ];
    protected function schedule(Schedule $schedule): void
    {

        $schedule->command('app:send-email-jogos')
            ->timezone('America/Sao_Paulo')
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
