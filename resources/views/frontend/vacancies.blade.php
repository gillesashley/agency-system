@extends('layouts.frontend')

@section('title', 'Vacancies')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Vacancies</h2>
                <ol>
                    <li><a href="{{ route('pages.index') }}">Home</a></li>
                    <li>Vacancies</li>
                </ol>
            </div>
        </div><!-- End Breadcrumbs -->
    </main>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($jobs as $index => $job)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $job->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $job->title }}</h5>
                                <p class="card-text">{{ $job->description }}</p>
                                <p class="card-text">{{ $job->location }}</p>
                                <a href="{{ route('pages.apply') }}" class="btn btn-primary">Apply Here</a>
                            </div>
                        </div>
                    </div>
                    @if (($index + 1) % 4 == 0)
                        </div><div class="row">
                    @endif
                @endforeach
            </div>
        </div>

    </section>
@endsection
