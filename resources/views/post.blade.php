@extends('layout.app')

@section('content')
    <div class="container">
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">{{ $post->judul }} <span class="text-body-secondary"></span>
                </h2>
                <p class="lead">{{ $post->konten }}</p>
            </div>
            <div class="col-md-5">
                @if ($post->gambar)
                    <div class="image-container">
                        <img src="{{ asset('storage/post/' . $post->gambar) }}" class="img-fluid"
                            alt="Gambar {{ $post->judul }}">
                    </div>
                @else
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                @endif
            </div>
        </div>

        <style>
            .image-container {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .image-container img {
                max-width: 100%;
                max-height: 100%;
            }
        </style>


        {{-- post 2 --}}
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">{{ $post2->judul }} <span class="text-body-secondary"></span>
                </h2>
                <p class="lead">{{ $post2->konten }}</p>
            </div>
            <div class="col-md-5">
                @if ($post2->gambar)
                    <div class="image-container">
                        <img src="{{ asset('storage/post/' . $post2->gambar) }}" class="img-fluid"
                            alt="Gambar {{ $post->judul }}">
                    </div>
                @else
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                @endif
            </div>
        </div>

        <style>
            .image-container {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .image-container img {
                max-width: 100%;
                max-height: 100%;
            }
        </style>


        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">{{ $post3->judul ?? '' }} <span
                        class="text-body-secondary"></span>
                </h2>
                <p class="lead">{{ $post3->konten ?? '' }}</p>
            </div>
            <div class="col-md-5">
                @if ($post3->gambar ?? '')
                    <div class="image-container">
                        <img src="{{ asset('storage/post/' . $post3->gambar ?? '') }}" class="img-fluid"
                            alt="Gambar {{ $post3->judul ?? '' }}">
                    </div>
                @else
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                @endif
            </div>
        </div>

        <style>
            .image-container {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .image-container img {
                max-width: 100%;
                max-height: 100%;
            }
        </style>


        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
    </div>
@endsection
