@extends('layout.app')

@section('content')
    <div class="container-sm">
        {{-- jadwal hari ini --}}
        <div>
            <h3>Jadwal Hari Ini</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jadwal Kunjungan Terakhir</th>
                        <th scope="col">Jadwal Hari Ini</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Jadwal Kunjungan Besok --}}
        <div>
            <h3>Jadwal Hari Ini</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jadwal Kunjungan Terakhir</th>
                        <th scope="col">Jadwal Mendatang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
