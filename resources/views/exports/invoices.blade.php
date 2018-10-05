<h1>
Jabir</h1>

<table>
    <thead>
    <tr>
        @foreach($invoices[0] as $invoice)
            <th>{{ ucfirst($invoice) }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
        @foreach ($invoice as $invoice2)
            <td>{{ $invoice2 }}</td>
        @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
