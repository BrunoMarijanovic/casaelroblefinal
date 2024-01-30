<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Reserva;

class EmailRecordarResena extends Mailable
{
    use Queueable, SerializesModels;

    public $idioma;

    /**
     * Create a new message instance.
     */
    public function __construct(Reserva $reserva)
    {
        $this->idioma = $reserva->idioma;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->idioma == 1) // ES
        {
            return new Envelope(
                subject: 'Gracias por tu estancia',
            );
        }
        else if ($this->idioma == 3) // CAT
        {
            return new Envelope(
                subject: 'Gràcies per la vostra estada',
            );
        }
        else if ($this->idioma == 4) // FR
        {
            return new Envelope(
                subject: 'Merci pour votre séjour',
            );
        }
        else // EN
        {
            return new Envelope(
                subject: 'Thank you for your stay',
            );
        }
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->idioma == 1) // ES
        {
            return new Content(
                view: 'mails.es.recordarResena',
            );
        }
        else if ($this->idioma == 3) // CAT
        {
            return new Content(
                view: 'mails.ca.recordarResena',
            );
        }
        else if ($this->idioma == 4) // FR
        {
            return new Content(
                view: 'mails.fr.recordarResena',
            );
        }
        else // EN
        {
            return new Content(
                view: 'mails.en.recordarResena',
            );
        }
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
