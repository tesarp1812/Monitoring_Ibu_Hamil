@extends('homepage')

@section('content')
    <div class="container-sm">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="row justify-content-center" style="margin-top: 150px">
                <div class="col-lg-6">
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <main class="form-registration">
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" required value="{{ old('email') }}"
                                    placeholder="name@example.com" autofocus>
                                <label for="email">Email address</label>
                                {{-- <div class="invalid-feedback">
                                    {{ $message }}
                                </div> --}}
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control rounded-bottom" name="password" id="password"
                                    required placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                        </form>
                        <small class="d-block mt-3">Belum Punya Akun? <a class="text-danger" href="/register">
                                Daftar
                                Sekarang!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>


    </body>
@endsection
