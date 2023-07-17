    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>HPHT</th>
                <th>biodata id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cek as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>
                        @foreach ($c->subjektif as $s)
                            {{ $s->biodata_id }}
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
