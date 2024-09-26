<!DOCTYPE html>
<html>
<head>
    <title>New Ticket Created</title>
</head>

{{--return $this->subject('New Ticket Created: ' . $this->ticket->name)--}}
{{--->view('emails.ticket_created')--}}
{{--->with([--}}
{{--'customer_name'         => $this->ticket->user->name,--}}
{{--'ticket_name'           => $this->ticket->name,--}}
{{--'ticket_description'    => $this->ticket->description,--}}
{{--'ticket_status'         => $this->ticket->status,--}}
{{--]);--}}
<body>
<h1>New Ticket Created</h1>
<p>A new ticket has been created by {{ $customer_name }}.</p>
<table>
    <tr>
        <td>Cutomer:</td>
        <td>{{ $customer_name }}</td>
    </tr>
    <tr>
        <td>Ticket:</td>
        <td>{{ $ticket_name }}</td>
    </tr>
    <tr>
        <td>Description:</td>
        <td>{{ $ticket_description }}</td>
    </tr>
    <tr>
        <td>Status:</td>
        <td>
            @if ($ticket_status == 'open')
                <span style="color: green;">{{ $ticket_status }}</span>
            @else
                <span style="color: red;">{{ $ticket_status }}</span>
            @endif
        </td>
    </tr>
</body>
</html>