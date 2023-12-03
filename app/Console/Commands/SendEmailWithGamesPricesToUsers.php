<?php

namespace App\Console\Commands;

use App\Mail\SendEmailWithGamesPrices;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailWithGamesPricesToUsers extends Command
{

    protected $signature = 'app:send-email-with-games-prices-to-users';

    protected $description = 'Envia um PDF contendo 10 jogos aleatórios com preço entre R$20,00 e R$100,00 via email todos os dias às 18h';

    public function handle()
    {
        $products = Product::query()
        ->inRandomOrder()
        ->take(10)
        ->whereBetween('price', [20, 100])
        ->get();

        Mail::to('fabiopieldidio@gmail.com', 'Fábio Didio')
        ->send(new SendEmailWithGamesPrices($products));

    }
}
