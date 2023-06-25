@extends('layout.app')

@section('content')
    <div class="px-4 py-5 my-5 text-center">
        {{-- <img class="d-block mx-auto mb-4" src="{{ asset('img/background.jpg') }}" alt="" width="72"
  height="57"> --}}
        <h1 class="display-5 fw-bold text-body-emphasis">Aplikasi Monitoring Ibu Hamil</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Kami hadir untuk memberikan pengalaman yang nyaman dan aman selama masa kehamilan Anda.
                Dengan fitur-fitur canggih kami, Anda dapat memantau perkembangan kesehatan Anda dan janin secara
                real-time. Kami berkomitmen untuk memberikan perawatan terbaik dan informasi yang dibutuhkan agar Anda
                dapat menjalani kehamilan dengan tenang dan penuh kebahagiaan</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                {{-- <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ 'checkup' }}">Cek Jadwal Check UP</a> --}}
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
            </div>
        </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        {{-- <img class="d-block mx-auto mb-4" src="{{ asset('img/background.jpg') }}" alt="" width="72"
  height="57"> --}}
        <h1 class="display-5 fw-bold text-body-emphasis">Cek Jadwal Checkup</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Penting untuk merencanakan dan mengatur jadwal checkup secara teratur. Setiap kunjungan
                membawa kebahagiaan dan kepastian bagi kesehatan ibu dan janin. Jadilah ibu hebat yang selalu
                memprioritaskan perawatan dan perhatian khusus.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ 'jadwal' }}">Cek Jadwal Check UP</a>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
            </div>
        </div>
    </div>
@endsection
