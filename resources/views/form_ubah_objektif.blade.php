@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Objektif</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        kesadaran <input type="text" name="inputkesadaran" required value="{{ $objektif->kesadaran }}">
                        tekanan_darah <input type="number" name="inputtekanan_darah" required
                            value="{{ $objektif->tekanan_darah }}">
                        suhu <input type="number" name="inputsuhu" required value="{{ $objektif->suhu }}">
                        nadi <input type="number" name="inputnadi" required value="{{ $objektif->nadi }}">
                        respirasi <input type="number" name="inputrespirasi" required value="{{ $objektif->respirasi }}">
                        bb <input type="number" name="inputbb" required value="{{ $objektif->bb }}">
                        tb <input type="number" name="inputtb" required value="{{ $objektif->tb }}">
                        kepala <input type="text" name="inputkepala" required value="{{ $objektif->kepala }}">
                        rambut <input type="text" name="inputrambut" required value="{{ $objektif->rambut }}">
                        muka <input type="text" name="inputmuka" required value="{{ $objektif->muka }}">
                        mata <input type="text" name="inputmata" required value="{{ $objektif->mata }}">
                        hidung <input type="text" name="inputhidung" required value="{{ $objektif->hidung }}">
                        telinga <input type="text" name="inputtelinga" required value="{{ $objektif->telinga }}">
                        mulut <input type="text" name="inputmulut" required value="{{ $objektif->mulut }}">
                        leher <input type="text" name="inputleher" required value="{{ $objektif->leher }}">
                        dada <input type="text" name="inputdada" required value="{{ $objektif->dada }}">
                        abdomen <input type="text" name="inputabdomen" required value="{{ $objektif->abdomen }}">
                        leopold 1 <input type="text" name="inputleopold1" required value="{{ $objektif->leopold1 }}">
                        leopold 2 <input type="text" name="inputleopold2" required value="{{ $objektif->leopold2 }}">
                        leopold 3 <input type="text" name="inputleopold3" required value="{{ $objektif->leopold3 }}">
                        leopold 4 <input type="text" name="inputleopold4" required value="{{ $objektif->leopold4 }}">
                        genetalia <input type="text" name="inputgenetalia" required value="{{ $objektif->genetalia }}">
                        ekstrimitas atas <input type="text" name="inputeks_atas" required
                            value="{{ $objektif->eks_atas }}">
                        ekstrimitas bawah <input type="text" name="inputeks_bawah" required
                            value="{{ $objektif->eks_bawah }}">
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
