@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Objektif</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="/objektif" method="POST">
                    @csrf
                    <ul class="list-group">

                        <input type="hidden" value="{{ $id }}" name="inputbiodata">
                        kesadaran <input type="text" name="inputkesadaran" required>
                        <div class="col d-flex mt-4">
                            <div class="mr-2">
                                Tekanan Darah <input type="number" name="inputtekanan_darah" required>
                            </div>
                            <div class="ml-2">
                                / <input type="number" name="inputtekanan2" required>
                            </div>
                        </div>
                        suhu <input type="number" name="inputsuhu" required>
                        nadi <input type="number" name="inputnadi" required>
                        respirasi <input type="number" name="inputrespirasi" required>
                        bb <input type="number" name="inputbb" required>
                        tb <input type="number" name="inputtb" required>
                        kepala <input type="text" name="inputkepala" required>
                        rambut <input type="text" name="inputrambut" required>
                        muka <input type="text" name="inputmuka" required>
                        mata <input type="text" name="inputmata" required>
                        hidung <input type="text" name="inputhidung" required>
                        telinga <input type="text" name="inputtelinga" required>
                        mulut <input type="text" name="inputmulut" required>
                        leher <input type="text" name="inputleher" required>
                        dada <input type="text" name="inputdada" required>
                        abdomen <input type="text" name="inputabdomen" required>
                        leopold 1 <input type="text" name="inputleopold1" required>
                        leopold 2 <input type="text" name="inputleopold2" required>
                        leopold 3 <input type="text" name="inputleopold3" required>
                        leopold 4 <input type="text" name="inputleopold4" required>
                        genetalia <input type="text" name="inputgenetalia" required>
                        ekstrimitas atas <input type="text" name="inputeks_atas" required>
                        ekstrimitas bawah <input type="text" name="inputeks_bawah" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
