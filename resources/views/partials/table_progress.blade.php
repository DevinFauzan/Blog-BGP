@if ($ticket->where('status', 'Progress')->isEmpty())
    <tr>
        <td colspan="6" class="text-center">There is no progress data</td>
    </tr>
@else
    @foreach ($ticket as $ticket)
        @if ($ticket->status == 'Progress')
            <tr>
                <td>{{ $ticket->name_user }}</td>
                <td>{{ $ticket->name_tech }}</td>
                <td>{{ $ticket->subject }}</td>
                <td>
                    <label class="badge badge-gradient-warning">{{ $ticket->status }}</label>
                </td>
                <td>{{ $ticket->created_at->format('Y-m-d') }}</td>
                <td>{{ $ticket->ticket_id }}</td>
            </tr>
        @endif
    @endforeach
@endif
