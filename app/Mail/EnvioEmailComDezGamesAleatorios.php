<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnvioEmailComDezGamesAleatorios extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {

    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Estas aventuras estão te esperando!',
            tags:['Jogos','Aventura','Ação']
        );
    }

    public function content(): Content
    {
        return new Content(

            html: 'emails.ListaComDezJogosTemplate',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
