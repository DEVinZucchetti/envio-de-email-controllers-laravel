<?php

namespace App\Console\Commands;

use App\Mail\EnvioEmailComDezGamesAleatorios;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EnvioEmailJogosParaUsuarios extends Command
{

    protected $signature = 'app:envio-email-jogos-para-usuarios';

    protected $description = 'Envia um email com um pdf contendo dez jogos aleatórios para os usuários todos os dias as 08:00 da manhã';

    public function handle()
    {
        $products = Product::query()
        ->inRandomOrder()
        ->take(10)
        // ->whereBetween('price',  [20 , 100])
        ->get();

        Mail::to('developerjose@hotmail.com','jose carlos narciso')
        ->send(new EnvioEmailComDezGamesAleatorios($products));

        // teste para mostrar se esta pegando os 10 jogos aleatórios
        // foreach($products as $produt){
        //   Log::info($produt->name);
        // }
    }
}
