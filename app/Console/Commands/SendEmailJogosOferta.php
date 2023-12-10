<?php

namespace App\Console\Commands;

use App\Mail\SendEmailJogos;
use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class SendEmailOfertaJogos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-jogos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jogos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::query()
        ->inRandomOrder()
        ->take(8)
        ->get();

        Mail::to('diegobatistademorais@gmail.com','Diego Batista')
        ->send(new SendEmailJogos($products));

    }
}
