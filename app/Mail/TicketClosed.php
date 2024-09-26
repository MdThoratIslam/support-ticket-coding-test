<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketClosed extends Mailable
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
     * $ticket->update(
     * [
     * 'status'            => 'Closed',
     * 'closed_by'         => auth()->user()->id,
     * 'closed_reason'     => $request->status == 'closed' ? $request->closed_reason : null,
     * 'updated_at'        => now(),
     * ]);
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Ticket has been Closed')
            ->view('emails.ticket_closed')
            ->with([
                'customer_name'         => $this->ticket->user->name,
                'ticket_name'           => $this->ticket->name,
                'ticket_description'    => $this->ticket->description,
                'ticket_status'         => $this->ticket->status,
                'closed_by'             => auth()->user()->name,
                'closed_reason'         => $this->ticket->closed_reason,
            ]);
    }
}
