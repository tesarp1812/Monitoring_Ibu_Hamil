@php
    use Carbon\Carbon;
@endphp
@extends('layout.app')

@section('content')
    <div class="container">
        <div class="my-4">
            @if (session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('edit'))
                <div class="alert alert-info">
                    {{ session('edit') }}
                </div>
            @endif

            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
        </div>

        <div class="my-4">
            <a href="/tambah_biodata" class="btn btn-primary">Tambah Data</a>
        </div>

        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomer Telpon</th>
                    <th scope="col">Nama Suami</th>
                    <th scope="col">Nomer Suami</th>
                    <th scope="col">HPL</th>
                    <th scope="col" class="exclude-export">Aksi</th>
                    <th scope="col" class="exclude-export">Data Pasien</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($biodata as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->umur }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>(+62) {{ $b->nomer_tlpn }}</td>
                        <td>{{ $b->nama_suami }}</td>
                        <td>(+62) {{ $b->nomer_suami }}</td>
                        <td>{{ $b->subjektif ? Carbon::createFromFormat('Y-m-d', $b->subjektif->HPL)->format('d-m-Y') : '' }}
                        </td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="/biodata/delete/{{ $b->id }}" method="POST">
                                <a href="/biodata/edit/{{ $b->id }}" class="btn btn-primary mr-2">Edit</a>
                                <a href="/biodata/show/{{ $b->id }}" class="btn btn-info">Data</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        <td>
                            <div class="col-md-3">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Data
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/subjektif/{{ $b->id }}" class="dropdown-item">Subjektif</a>
                                    </li>
                                    <li><a href="/objektif/{{ $b->id }}" class="dropdown-item">Objektif</a></li>
                                    <li><a href="/checkup/{{ $b->id }}" class="dropdown-item">Chekup</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Memuat jQuery terlebih dahulu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Kemudian baru memuat script DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip', // Menampilkan tombol pada div dengan class "dt-buttons"
                buttons: [{
                        extend: 'copy', // Tombol Copy to Clipboard
                        exportOptions: {
                            columns: ':not(.exclude-export)'
                        }
                    },
                    {
                        extend: 'excel', // Tombol Export ke Excel
                        exportOptions: {
                            columns: ':not(.exclude-export)'
                        }
                    },
                    {
                        extend: 'csv', // Tombol Export ke CSV
                        exportOptions: {
                            columns: ':not(.exclude-export)'
                        }
                    },
                    {
                        extend: 'pdf', // Tombol Export ke PDF
                        exportOptions: {
                            columns: ':not(.exclude-export)'
                        }
                    },
                    {
                        extend: 'print', // Tombol Print
                        exportOptions: {
                            columns: ':not(.exclude-export)'
                        }
                    }
                ]
            });
        });
    </script>
@endsection
