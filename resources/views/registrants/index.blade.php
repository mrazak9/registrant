<h1>Registrants List</h1>

<form action="{{ route('registrants.index') }}" method="get">
    <label for="year">Filter by Year:</label>
    <input type="number" name="year" id="year" value="{{ $year }}">
    <button type="submit">Filter</button>
</form>

<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <!-- Add other table headers as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($registrants as $registrant)
            <tr>
                <td>{{ $registrant->code }}</td>
                <td>{{ $registrant->people->name }}</td>
                <!-- Add other table cells as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
