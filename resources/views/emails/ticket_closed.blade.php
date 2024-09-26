<!DOCTYPE html>
<html>
<head>
    <title>Ticket Closed</title>
</head>
<body>
<h1>Your Ticket has been Closed</h1>

<p>Dear {{ $customer_name }},</p>
<p>Your ticket titled "<strong>{{ $ticket_name }}</strong>" has been closed.</p>

<table>
    <tr>
        <td>Ticket Name:</td>
        <td>{{ $ticket_name }}</td>
    </tr>
    <tr>
        <td>Description:</td>
        <td>{{ $ticket_description }}</td>
    </tr>
    <tr>
        <td>Status:</td>
        <td>
            <span style="color: red;">{{ $ticket_status }}</span>
        </td>
    </tr>
    <tr>
        <td>Closed By:</td>
        <td>{{ $closed_by }}</td>
    </tr>
    <tr>
        <td>Reason for Closure:</td>
        <td>{{ $closed_reason ? $closed_reason : 'No reason provided' }}</td>
    </tr>
</table>

<p>If you need further assistance, feel free to open a new ticket.</p>

<p>Thank you,<br/>The Support Team</p>
</body>
</html>
