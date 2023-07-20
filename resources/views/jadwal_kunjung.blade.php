@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Jadwal Praktek Bidan</h1>
            <table border="1">
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Lokasi Praktek</th>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>Pagi (08:00 - 12:00)</td>
                    <td>Puskesmas A</td>
                </tr>
                <tr>
                    <td rowspan="2">Senin</td>
                    <td>Sore (14:00 - 18:00)</td>
                    <td>Puskesmas B</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>Pagi (09:00 - 12:00)</td>
                    <td>Rumah Sakit C</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>Sore (14:00 - 17:00)</td>
                    <td>Klinik Swasta D</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>Pagi (08:00 - 12:00)</td>
                    <td>Puskesmas E</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>Pagi (09:00 - 12:00)</td>
                    <td>Klinik Swasta F</td>
                </tr>
                <tr>
                    <td rowspan="2">Kamis</td>
                    <td>Sore (14:00 - 18:00)</td>
                    <td>Puskesmas G</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>Pagi (08:00 - 12:00)</td>
                    <td>Puskesmas H</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>Sore (14:00 - 17:00)</td>
                    <td>Rumah Sakit I</td>
                </tr>
                <tr>
                    <td>Sabtu</td>
                    <td colspan="2">Libur</td>
                </tr>
                <tr>
                    <td>Minggu</td>
                    <td colspan="2">Libur</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
