<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Laravel\SerializableClosure\Signers\Hmac;

class SendEmailWithGames extends Mailable
{
    use Queueable, SerializesModels;

    public $games;

    public function __construct($products)
    {
        $this->games = $products;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->games . ' - O jogo do dia!',
        );
    }

    public function content(): Content
    {
        return new Content(
           html: 'emails.GameOfTheDayTemplate',
        );
    }

    public function attachments(): array
    {
        $pdf = Pdf::loadView('pdfs.GameOfTheDayPdf', [ 'games' => $this->games]);

        return [
            Attachment::fromData(fn () => $pdf->output())
            ->as('jogo_do_dia.pdf')
            ->withMime('application/pdf')
        ];
    }
}
