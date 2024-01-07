<?php

namespace App\Console\Commands;

use App\Mail\SendEmailTopGame;
use App\Models\Avaliation;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTopGameEmailToUsers extends Command
{

    protected $signature = 'app:send-top-game-email-to-users';


    protected $description = 'Envia um email contendo o jogo mais bem avaliado da plataforma (nome, preço, avaliações), as 20h no fuso do equador. Todos os dias!';


    public function handle()
    {
        $products = Product::with('avaliations')->get();
    
        $bestRatedGame = null;
        $highestRating = 0;
    
        foreach ($products as $product) {
            $totalRecommendations = $product->avaliations->where('recommended', true)->count();
            $totalAvaliations = $product->avaliations->count();
            $averageRating = $totalAvaliations > 0 ? $totalRecommendations / $totalAvaliations : 0;
    
            if ($averageRating > $highestRating) {
                $highestRating = $averageRating;
                $bestRatedGame = $product;
            }
        }
    
        if ($bestRatedGame) {
            Mail::to('cardoso.cn@gmail.com', 'Marcel Cardoso')->send(new SendEmailTopGame($bestRatedGame, $averageRating));
        }
    }    
}
