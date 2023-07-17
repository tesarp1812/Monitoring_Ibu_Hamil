<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>hpht</th>
            <th>hpl</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perkiraanLahir as $data)
            <tr>
                <td>{{ $data['biodata_id'] }}</td>
                <td></td>
                <td> {{ $data['hpht'] }}</td>
                <td>{{ $data['hpl'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="container">
    <div class="card">
        <h3>test</h3>
    </div>
</div>
