@extends('layout.app')
@section('content')
    <form>
        <a scope="col" href="/biodata" class="btn btn-primary mr-2">Kembali</a>
        @if (!$objek)
            <a scope="col" href="/objektif/create/{{ $biodata_id }}" class="btn btn-primary mr-2">Tambah
                Data Baru</a>
        @endif
    </form>
    <div class="card-body">
        <h5 class="card-header bg-info">Data Objektif</h5>
        <div class="card-body">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">kesadaran</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->kesadaran ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">tekanan_darah</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->tekanan_darah ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">suhu</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->suhu ?? '' }}/C</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">nadi</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->nadi ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">respirasi</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->respirasi ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">bb</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->bb ?? '' }}
                        Kg</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">tb</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->tb ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">kepala</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->kepala ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">rambut</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->rambut ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">muka</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->muka ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">mata</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->mata ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">hidung</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->hidung ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">telinga</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->telinga ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">mulut</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->mulut ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">leher</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->leher ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">dada</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->dada ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">abdomen</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->abdomen ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">leopold 1</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->leopold1 ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">leopold 2</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->leopold2 ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">leopold 3</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->leopold3 ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">leopold 4</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->leopold4 ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">genetalia</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->genetalia ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">eks_atas</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->eks_atas ?? '' }}</label>
                </div>

                <label for="staticEmail" class="col-sm-2 col-form-label">eks_bawah</label>
                <div class="col-sm-10">
                    <label class="col-sm-2 col-form-label">{{ $objek->eks_bawah ?? '' }}</label>
                </div>
                <div>
                    @if ($objek)
                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                            action="/objektif/delete/{{ $objek->id }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            {{-- <button type="submit" class="btn btn-danger">Hapus</button> --}}
                            <a scope="col" href="/objektif/edit/{{ $objek->biodata_id ?? '' }}"
                                class="btn btn-primary mr-2">Edit</a>
                        </form>
                    @endif
                </div>
            </div>
        @endsection
