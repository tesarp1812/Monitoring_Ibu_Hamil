@extends('homepage')

@section('content')
    <div class="container-sm">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="row justify-content-center" style="margin-top: 150px">
                <div class="col-lg-6">
                    <main class="form-registration">
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="email" class="form-control " name="email" id="email" required
                                    value="{{ old('email') }}" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control rounded-bottom" name="password" id="password"
                                    required placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                        </form>
                        <small class="d-block mt-3">Doesn't have an account? <a class="text-danger" href="/register">
                                Register
                                Now!</a></small>
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>


    </body>
@endsection
