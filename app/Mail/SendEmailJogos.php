<?php

namespace App\Mail;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Mail\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailJogos extends Mailable
{
    use Queueable, SerializesModels;


    public $games;
    public function __construct($games)
    {
        $this->games = $games;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Jogos em oferta',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'emails.SendEmailOfertaJogos',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $pdf = PDF::loadView('pdfs.ofertaJogosList');

        return [
            Attachment::fromData(fn () => $pdf->output())
            ->as('sugestoes_jogos.pdf')
            ->withMime('application/pdf')
        ];
    }
}
