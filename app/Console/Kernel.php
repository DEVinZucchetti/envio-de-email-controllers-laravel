<?php

namespace App\Console;

use App\Console\Commands\EnvioEmailJogosParaUsuarios;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        EnvioEmailJogosParaUsuarios::class
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:envio-email-jogos-para-usuarios')
        ->timezone('America/Sao_Paulo')
        ->at('08:00');
    }
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
