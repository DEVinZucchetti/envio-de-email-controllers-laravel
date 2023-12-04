<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendEmailWithGames;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailWithGameOfTheDay extends Command
{
    protected $signature = 'app:send-email-with-game-of-the-day';
    protected $description = 'Envia uma email com um pdf contendo 1 jogos aleatórios ás 12:00 todos os dia';

    public function handle()
    {

        Log::info('entrou no handle');

        $product = Product::random()->first();

        Mail::to('veronica_v_santos@estudante.sesisenai.org.br', 'Verônica Vilas')
        ->send(new SendEmailWithGames($product));
    }
}
