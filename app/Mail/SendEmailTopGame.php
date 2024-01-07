<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailTopGame extends Mailable
{
    use Queueable, SerializesModels;

    public $bestRatedGame;

    public function __construct($bestRatedGame)
    {
        $this->bestRatedGame = $bestRatedGame;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'O jogo mais bem avaliado da Steam',
            tags: ['Jogos', 'Melhor avaliado']
        );
    }

    public function content(): Content
    {
        return new Content(
            html: 'emails.TopGameAvaliationTemplate',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
