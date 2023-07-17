    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>HPHT</th>
                <th>HPL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biodata as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>{{$c->subjektif->HPHT}}</td>
                    <td>{{$c->subjektif->HPL}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
