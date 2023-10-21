@php
    use Carbon\Carbon;
@endphp
@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Card Biodata -->
            <div class="col-md-5">
                <div class="card" style="width: 30rem;">
                    <div class="card-header">
                        Biodata Pasien
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="mb-3 row">
                                <label class="col-sm-5 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->nama }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Umur</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->umur }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Agama</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->agama }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Pendidikan</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->pendidikan }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Pekerjaan</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->pekerjaan }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->alamat }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Nomer Telpon</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->nomer_tlpn }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Nama Suami</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->nama_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Umur Suami</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->umur_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Agama</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->agama_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Pendidikan</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->pendidikan_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Pekerjaan</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->pekerjaan_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->alamat_suami }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">Nomer Telpon Suami</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">: {{ $biodata->nomer_suami }}</label>
                                </div>
                            </div>
                        </div>
                        <a href="/biodata/edit/{{ $biodata->id }}" class="btn btn-primary">Edit</a>
                        <a href="/biodata" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>

            <!-- Card Lainnya -->
            <div class="col-md-6">
                <div class="card" style="width: 30rem;">
                    <div class="card-header">
                        Data Perkembangan Pasien
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="mb-3 row">
                                <label class="col-sm-5 col-form-label">HPHT</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">:
                                        {{ $biodata->subjektif ? Carbon::createFromFormat('Y-m-d', $biodata->subjektif->HPHT)->format('d-m-Y') : '' }}</label>
                                </div>

                                <label class="col-sm-5 col-form-label">HPL</label>
                                <div class="col-sm-5">
                                    <label class="form-control-plaintext">:
                                        {{ $biodata->subjektif ? Carbon::createFromFormat('Y-m-d', $biodata->subjektif->hpl)->format('d-m-Y') : '' }}</label>
                                </div>

                                <!-- Tambahkan elemen canvas untuk menampilkan grafik -->
                                <label class="col-sm-5 col-form-label">Grafik Berat Badan</label>
                                <canvas id="beratBadanChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <a href="/checkup/{{ $biodata->id }}" class="btn btn-primary">Checkup</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan script untuk menggambar grafik -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Data dari Laravel PHP (gunakan data yang dihasilkan dari server)
            var berat = @json($checkupData);
            var tgl = @json($tgl);

            // Chart.js Line Chart Data
            const chartData = {
                labels: tgl,
                datasets: [{
                    label: 'Berat Badan',
                    data: berat,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                }]
            };

            // Get the canvas element
            const ctx = document.getElementById('beratBadanChart').getContext('2d');

            // Create the line chart
            const lineChart = new Chart(ctx, {
                type: 'line',
                data: chartData,
                options: {
                    responsive: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection
