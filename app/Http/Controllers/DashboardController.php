<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tickets\TicketsResource;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->hasRole('Admin'))
        {
            $users = User::where('type', 2)->get();
            $all_tickets = new TicketsResource(Ticket::all());
        }else{
            $users = User::where('type', 2)->where('id', auth()->id())->get();
            $all_tickets = new TicketsResource(Ticket::where('user_id', auth()->id())->get());
        }
        return view('dashboard', [
            'users'         => $users,
            'all_tickets'   => $all_tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
