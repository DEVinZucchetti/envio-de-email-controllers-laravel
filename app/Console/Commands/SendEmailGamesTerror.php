<?php

namespace App\Console\Commands;

use App\Mail\SendGameTerrorEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendEmailGamesTerror extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-games-terror';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jogos de Terror';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $results = DB::select("select p.id as game_id, p.name, p.price, m.name from products p
        join products_markers pm ON pm.product_id = p.id
        join markers m on m.id  = pm.marker_id
        where
            price between 30 and 300
            and m.name = 'terror'");

        if (count($results) > 0) {
            Mail::to('natanaelbguilherme@gmail.com', 'natanel')
                ->send(new SendGameTerrorEmail($results));
        }
    }
}
