<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Ticket Created: ' . $this->ticket->name)
            ->view('emails.ticket_created')
            ->with([
                'customer_name'         => $this->ticket->user->name,
                'ticket_name'           => $this->ticket->name,
                'ticket_description'    => $this->ticket->description,
                'ticket_status'         => $this->ticket->status,
            ]);
    }
}
