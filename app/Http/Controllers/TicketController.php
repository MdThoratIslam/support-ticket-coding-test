<?php
namespace App\Http\Controllers;
use App\Http\Requests\Tickets\StoreTicketRequest;
use App\Http\Requests\Tickets\UpdateTicketRequest;
use App\Mail\TicketClosed;
use App\Mail\TicketCreated;
use App\Models\Ticket;
use Illuminate\Support\Facades\Mail;
use Flasher\Laravel\Facade\Flasher;
class TicketController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Ticket::class);
        $tickets        = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }
    public function create()
    {
        $this->authorize('create', Ticket::class);
        return view('tickets.create');
    }
    public function store(StoreTicketRequest $request)
    {
        $this->authorize('create', Ticket::class);
        try {
            $ticket = Ticket::create(
                [
                'user_id'           => auth()->id(),
                'name'              => $request->name,
                'description'       => $request->description,
                'status'            => 'Open',
                'created_at'        => now(),
                'updated_at'        => null,
            ]);
            Mail::to('thorat.pwad03@gmail.com')->send(new TicketCreated($ticket));
            Flasher::addSuccess('Ticket created successfully');
            return redirect()->route('tickets.index');
        }catch (\Exception $e)
        {
            Flasher::addError('Something went wrong'. $e->getMessage());
            return redirect()->back();
        }

    }
    public function show(Ticket $ticket)
    {
        $this->authorize('view', $ticket);
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $this->authorize('update', $ticket);
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        $this->authorize('update', $ticket);
        try {
            $user_mail = $ticket->user->email;

            $ticket->update(
                [
                'status'            => 'Closed',
                'closed_by'         => auth()->user()->id,
                'closed_reason'     => $request->closed_reason,
                'updated_at'        => now(),
            ]);
            Mail::to($user_mail)->send(new TicketClosed($ticket));
            Flasher::addSuccess('Ticket updated successfully');
            return redirect()->route('tickets.index');
        }catch (\Exception $e)
        {
            Flasher::addError('Something went wrong'. $e->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
