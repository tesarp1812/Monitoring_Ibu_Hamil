@extends('layout.app')
@section('content')
    <div class="container">
        <div class="mb-3">
            <form>
                @if (!$objek)
                    <a scope="col" href="/objektif/create/{{ $biodata_id }}" class="btn btn-primary mr-2">Tambah
                        Data Baru</a>
                @endif
            </form>
        </div>
    </div>
    <div class="container">
        <div style="width:20%">
            @if (session('success'))
                <div class="alert alert-info ">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('edit'))
                <div class="alert alert-info ">
                    {{ session('edit') }}
                </div>
            @endif

            @if (session('delete'))
                <div class="alert alert-danger ">
                    {{ session('delete') }}
                </div>
            @endif
        </div>
        <div class="card-body" style="width: 70%">
            <h5 class="card-header bg-info">Data Objektif</h5>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label">Kesadaran</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->kesadaran ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Tekanan Darah</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->tekanan_darah ?? '' }} /
                            {{ $objek->tekanan2 ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Suhu</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->suhu ?? '' }}/C</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Nadi</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->nadi ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Respirasi</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->respirasi ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Berat Badan</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->bb ?? '' }}
                            Kg</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->tb ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Kepala</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->kepala ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Rambut</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->rambut ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Muka</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->muka ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Mata</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->mata ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Hidung</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->hidung ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Telinga</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->telinga ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Mulut</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->mulut ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Leher</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->leher ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Dada</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->dada ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Abdomen</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->abdomen ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Leopold 1</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->leopold1 ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Leopold 2</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->leopold2 ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Leopold 3</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->leopold3 ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Leopold 4</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->leopold4 ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Genetalia</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->genetalia ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Ekstrimitas Atas</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->eks_atas ?? '' }}</label>
                    </div>

                    <label class="col-sm-5 col-form-label">Ekstrimitas Bawah</label>
                    <div class="col-sm-5">
                        <label class="col-sm-5 col-form-label">{{ $objek->eks_bawah ?? '' }}</label>
                    </div>
                    <div>
                        @if ($objek)
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="/objektif/delete/{{ $objek->id }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                {{-- <button type="submit" class="btn btn-danger">Hapus</button> --}}
                                <a scope="col" href="/objektif/edit/{{ $objek->biodata_id ?? '' }}"
                                    class="btn btn-primary mr-2">Edit</a>
                            </form>
                        @endif
                        <a scope="col" href="/biodata" class="btn btn-secondary mr-2">Kembali</a>
                    </div>
                </div>
            </div>
        @endsection
