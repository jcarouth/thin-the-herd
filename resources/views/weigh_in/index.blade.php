<h1>Weigh Ins</h1>

<table>
    <thead>
        <tr>
            <th>User</th>
            <th>Weight</th>
            <th>Units</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weigh_ins as $weigh_in)
        <tr>
            <td>{{ $weigh_in->user->name }}</td>
            <td>{{ $weigh_in->weight }}</td>
            <td>{{ $weigh_in->units }}</td>
            <td>{{ $weigh_in->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
